<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('admin.peminjaman.index');
    }

    public function store(Request $request)
    {
        $request->validate([]);

        $peminjaman = Peminjaman::create([]);

        return back();
    }
}
