<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::orderByDesc('id')->get();
        $kategori = Kategori::all();
        return view('admin.buku.index', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'kategori' => ['required'],
        ]);

        $buku = Buku::create([
            'title' => $request->title,
            'description' => $request->description,
            'jumlah_buku' => $request->jumlah_buku
        ]);

        $buku->kategori()->attach($request->kategori);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $buku->addMediaFromRequest('image')->toMediaCollection('book', 'public');
        }

        return back();
    }
}
