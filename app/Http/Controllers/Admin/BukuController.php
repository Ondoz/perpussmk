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
        $buku = Buku::orderByDesc('id')->with(['kategori', 'media'])->paginate(12);
        $kategori = Kategori::all();
        return view('admin.buku.index', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        // return $request;
        // $request->validate([
        //     'title' => ['required'],
        //     'description' => ['required'],
        //     'kategori' => ['required'],
        // ]);

        $buku = Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori_id' => $request->kategori
        ]);

        if ($buku) {
            $buku->detail_buku()->create([
                'tgl_rilis' => $request->tgl_rilis,
                'bahasa' => $request->bahasa,
                'penerbit' => $request->penerbit,
                'negara' => $request->negara,
                'jumlah_halaman' => $request->jumlah_halaman,
                'description' => $request->description,
            ]);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $buku->addMediaFromRequest('image')->toMediaCollection('default');
            }
            return back();
        } else {
            return false;
        }
    }

    public function edit($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->with('kategori')->with('detail_buku')->FirstorFail();
        return response()->json($buku);
    }

    public function update(Request $request, $uuid)
    {
        $buku = Buku::where('uuid', $uuid)->firstorFail();

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori_id' => $request->kategori
        ]);

        $buku->detail_buku()->update([
            'tgl_rilis' => $request->tgl_rilis,
            'bahasa' => $request->bahasa,
            'penerbit' => $request->penerbit,
            'negara' => $request->negara,
            'jumlah_halaman' => $request->jumlah_halaman,
            'description' => $request->description
        ]);

        if ($request->hasFile('image')) {
            $buku->clearMediaCollection('default');
            $buku->addMediaFromRequest('image')->toMediaCollection('default');
        };

        return back();
    }

    public function destroy($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->FirstorFail();
        $buku->delete();
    }
}
