<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Cart;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth()->user()->id)
            ->with(['buku' => function ($q) {
                $q->with('media');
            }])
            ->selectRaw('buku_id, count(*) as total')
            ->groupBy('buku_id')
            ->get();
        return view('checkout', compact('cart'));
    }

    public function store($uuid)
    {
        if (Auth::check()) {
            $buku = Buku::where('uuid', $uuid)->firstorfail();
            $cart = $buku->cart()->create([
                'user_id' => auth()->user()->id
            ]);

            return back();
        } else {
            return redirect('login');
        }
    }

    public function checkout(Request $request)
    {
        $arr = [];
        $user = Auth::user()->id;
        $peminjaman = Peminjaman::create([
            'user_id' => $user,
            'is_status' => 'pending'
        ]);
        if ($peminjaman) {
            foreach ($request->buku_id as $key => $value) {
                $peminjaman->peminjamanitem()->create([
                    'buku_id' => $value,
                    'qty' => $request['qty'][$key],
                    'is_status' => 'false',
                ]);
            }
        }

        Cart::where('user_id', $user)->delete();
        return redirect()->route('cart.finish', ['uuid' => $peminjaman->uuid]);
    }

    public function checkoutfinish($peminjaman)
    {
        $peminjaman = Peminjaman::where('uuid', $peminjaman)->with('peminjamanitem.buku.media')->firstorfail();
        return view('checkout_finish', compact('peminjaman'));
    }
}
