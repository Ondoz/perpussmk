<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\PeminjamanItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('is_status', 'success')->with(['user', 'peminjamanitem'])->withCount([
            'peminjamanitem',
            'peminjamanitem as status_item_count_false' => function ($query) {
                $query->where('is_status', 'false');
            },
            'peminjamanitem as status_item_count_true' => function ($query) {
                $query->where('is_status', 'true');
            }
        ])->get();
        $date_now = Carbon::now()->format('Y-m-d');
        return view('admin.pengembalian.index', compact('peminjaman', 'date_now'));
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::where('uuid', $id)->with(['user', 'peminjamanitem.buku.media'])->get();
        return $peminjaman;
    }

    public function statusItemUpdate(Request $request)
    {
        $item = PeminjamanItem::where('uuid', $request->uuid)->first();

        if ($item) {
            $item->update([
                'is_status' => $request->value
            ]);
            return true;
        } else {
            return false;
        }
    }
}
