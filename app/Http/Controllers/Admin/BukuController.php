<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('admin.buku.index', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'kategori' => ['required']
        ]);

        $buku = Buku::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $buku->kategori()->attach($request->kategori);
        return back();
    }
}
