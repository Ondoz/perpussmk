<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::orderByDesc('id')->get();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $kategori =  Kategori::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function edit($uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstorFail();
        return response()->json($kategori);
    }

    public function update(Request $request, $uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstorFail();
        $kategori->update([
            'name' => $request->name
        ]);

        return back();
    }

    public function destroy(Request $request,$uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstOrFail();
        $kategori->delete();
    }
}
