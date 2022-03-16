<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::orderByDesc('id')->with('user')->get();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([]);

        $peminjaman = Peminjaman::create([]);

        return back();
    }

    public function get_code_manual(Request $request)
    {

        // return $request;
        $peminjaman = Peminjaman::where('is_code', $request->code)->first();
        if ($peminjaman) {
            $update = $peminjaman->update([
                'date_start' => Carbon::now()->toDateString(),
                'date_end' =>   Carbon::now()->addDay(7)->toDateString(),
                'is_status' => 'success'
            ]);

            if ($update) {
                $response = [
                    'success' => true,
                    'url' => route('admin.peminjaman.index')
                ];
            } else {
                $response = [
                    'success' => false,
                    'url' => null,
                    'message' => 'Kode Tidak Di Temukan'
                ];
            }
        } else {
            $response = [
                'success' => false,
                'url' => null,
                'message' => 'Kode Tidak Di Temukan'
            ];
        }
        return $response;
    }

    public function show($code)
    {
        $peminjaman = Peminjaman::where('is_code', $code)->FirstOrFail();
        if ($peminjaman) {
            $update = $peminjaman->update([
                'date_start' => Carbon::now()->toDateString(),
                'date_end' =>   Carbon::now()->addDay(7)->toDateString(),
                'is_status' => 'success'
            ]);

            if ($update) {
                return back();
            } else {
                return abort(404);
            }
        }
        return abort(404);
    }
}
