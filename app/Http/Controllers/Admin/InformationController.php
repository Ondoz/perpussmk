<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $information = Information::orderByDesc('id')->paginate();
        return view('admin.informasi.index', compact('information'));
    }

    public function search(Request $request)
    {
        $information = Information::where('title', 'like', "%" . $request->search . "%")
            ->paginate();
        return view('admin.informasi.index', compact('information'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        $data = Information::create([
            'title' => $request->title,
            'descriptions' => $request->description,
            'is_status' => 'is_public'
        ]);

        return redirect()->route('admin.information.index');
    }

    public function update(Request $request)
    {
        $info = Information::where('uuid', $request->uuid)->firstorfail();

        $info->update([
            'title' => $request->title,
            'descriptions' => $request->description,
        ]);

        return redirect()->route('admin.information.index');
    }

    public function updateStatus()
    {
    }

    public function edit($uuid)
    {
        $information = Information::where('uuid', $uuid)->first();

        return view('admin.informasi.edit', compact('information'));
    }

    public function destroy($uuid)
    {
        $info = Information::where('uuid', $uuid)->firstorfail();
        $info->delete();
        return back();
    }
}
