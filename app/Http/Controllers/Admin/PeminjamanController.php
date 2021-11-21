<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::orderByDesc('id')->get();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([]);

        $peminjaman = Peminjaman::create([]);

        return back();
    }

    public function show($code)
    {
        $peminjaman = Peminjaman::where('is_code', $code)->FirstOrFail();
        return response()->json($peminjaman);
    }
}
