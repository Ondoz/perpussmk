<?php

namespace App\Helpers;

use App\Models\Buku;
use App\Models\Cart;
use App\Models\Setting;
use App\Models\User;
use Auth;

class GeneralHelper
{
    public static function titleName($urlRequest)
    {
        $url = Url('/');
        switch ($urlRequest) {
            case  $url . '/admin/kategori':
                return 'Katergori Buku Perpustakaan';
                break;
            case  $url . '/admin/buku':
                return 'List Buku';
                break;
            case  $url . '/admin/peminjaman':
                return 'Peminjaman Buku';
                break;
            case  $url . '/admin/pengembalian':
                return 'Pengembalian Buku';
                break;
            case  $url . '/admin/setting':
                return 'Pengaturan Perpustakan';
                break;
            default:
                return 'Dasboard Admin';
                break;
        }
    }

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

    public static function settingPerpustakan($key)
    {
        $setting = Setting::where('key', $key)->first();
        if ($setting) {
            if ($setting->type !== 'file') {
                return $setting->value;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    public static function newBook($limit = 4)
    {
        $book = Buku::inRandomOrder()->with('media')->take($limit)->get();
        return $book;
    }
}
