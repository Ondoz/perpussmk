<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HistroyPeminjaman extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', auth()->user()->id)->with('peminjamanitem.pengembalian_item')->paginate(10);
        return view('history', compact('peminjaman'));
    }

    public function updatestatus($uuid)
    {
        $peminjaman = Peminjaman::where('uuid', $uuid)->first();
        $peminjaman->update([
            'is_status' => 'canceled'
        ]);
        return back();
    }

    public function pengembalianItem($peminjaman)
    {

        $peminjaman = Peminjaman::where('uuid', $peminjaman)->with('peminjamanitem', function ($q) {
            return $q->with(['buku.media', 'pengembalian_item']);
        })->firstorfail();
        // return $peminjaman;
        return view('history-pengembalian', compact('peminjaman'));
    }
}
