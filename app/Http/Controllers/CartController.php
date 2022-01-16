<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
    }

    public function store($uuid)
    {
        if (Auth::check()) {
            $buku = Buku::where('uuid', $uuid)->firstorfail();
            $cart = $buku->cart()->create([
                'user_id' => auth()->user()->id
            ]);

            return $cart;
        } else {
            return redirect('login');
        }
    }
}
