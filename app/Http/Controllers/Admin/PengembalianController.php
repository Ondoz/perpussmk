<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\GeneralHelper;
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
        $peminjaman = Peminjaman::where('uuid', $id)->with(['user', 'peminjamanitem.buku.media'])->firstorfail();
        $cDate =  Carbon::parse($peminjaman->date_end);
        $delay = $cDate->diffInDays();

        if ($delay > 0) {
            $denda = GeneralHelper::settingPerpustakan('denda_harian') * $delay;
        } else {
            $denda = 0;
        }

        $rusak = GeneralHelper::settingPerpustakan('denda_kerusakan');
        return view('admin.pengembalian.details', compact('peminjaman', 'denda', 'rusak'));
    }

    public function editItem($id)
    {
        $itemPeminjaman = PeminjamanItem::where('uuid', $id)->firstorfail();
        return $itemPeminjaman;
    }

    public function statusItemUpdate(Request $request)
    {
        $item = PeminjamanItem::where('uuid', $request->uuid)->first();

        if ($item) {
            $item->update([
                'is_status' => $request->value,
                'ketarangan_status' => $request->ket_status
            ]);
            return true;
        } else {
            return false;
        }
    }

    public function storePengembalian(Request $request)
    {
        $peminjaman_item = PeminjamanItem::where('uuid', $request->peminjaman_item_id)->first();
        if ($peminjaman_item) {
            $peminjaman_item->pengembalian_item->create([
                'qty' => $request->qty,
                'keterangan_status' => $request->keterangan_status,
                'denda' => $request->denda
            ]);
        } else {
            return false;
        }
        // 'peminjaman_item_id',

    }
}
