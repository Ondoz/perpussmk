<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HistroyPeminjaman extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', auth()->user()->id)->paginate(10);
        return view('history', compact('peminjaman'));
    }

    public function updatestatus($uuid)
    {
        $peminjaman = Peminjaman::where('uuid', $uuid)->first();
        $peminjaman->update([
            'is_status' => 'canceled'
        ]);
        return back();
        // return $peminjaman;
    }
}
