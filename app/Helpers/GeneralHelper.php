<?php

namespace App\Helpers;

use App\Models\Cart;
use App\Models\User;
use Auth;

class GeneralHelper
{
    public static function menuActive($url)
    {
        $active = request()->is($url) ? 'active' : '';
        return $active;
    }
    // forLast
    public static function commasLoop($loop)
    {
        if ($loop->last) {
            return '.';
        } elseif ($loop->remaining == 1) {
            return '&';
        } elseif (!$loop->first) {
            return ',';
        }
    }

    public function getCart()
    {
        if (Auth::check()) {
            $user = Auth::User()->id;
        } else {
            $user = null;
        }


        $cart = Cart::where('user_id', $user)
            ->with(['buku' => function ($q) {
                $q->with('media');
            }])
            ->selectRaw('buku_id, count(*) as total')
            ->groupBy('buku_id')
            ->get();
        return $cart;
    }

    public function getCountCart()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth()->user()->id)->groupBy('buku_id')
                ->get()->count();
            return $cart;
        } else {
            return '0';
        }
    }
}
