<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Cart;
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
}
