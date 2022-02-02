<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Cart;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        // $user = Cart::where('user_id', Auth()->user()->id)->count('buku_id')->groupBy('buku_id')->get();
        $cart = Cart::where('user_id', Auth()->user()->id)
            ->with(['buku' => function ($q) {
                $q->with('media');
            }])
            ->selectRaw('buku_id, count(*) as total')
            ->groupBy('buku_id')
            ->get()->count();
        return $cart;
    }
}
