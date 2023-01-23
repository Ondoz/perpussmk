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
        $peminjaman = Peminjaman::where('is_status', 'success')->with('user')->with('peminjamanitem', function ($q) {
            $q->withSum('pengembalian_item', 'qty');
        })->get();
        $date_now = Carbon::now()->format('Y-m-d');

        return view('admin.pengembalian.index', compact('peminjaman', 'date_now'));
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::where('uuid', $id)->with('user')->with('peminjamanitem', function ($q) {
            $q->with('buku.media')->withSum('pengembalian_item', 'qty');
        })->firstorfail();

        $cDate =  Carbon::parse($peminjaman->date_end);
        $delay = $cDate->diffInDays();

        if ($delay > 0) {
            $denda = (GeneralHelper::settingPerpustakan('denda_harian') * $delay) + GeneralHelper::settingPerpustakan('denda_harian');
        } else {
            $denda = GeneralHelper::settingPerpustakan('denda_harian');
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
        $countQtyRequest = array_sum($request->qty);
        $peminjaman_item = PeminjamanItem::where('uuid', $request->peminjaman_item_id)->first();
        if ($peminjaman_item) {
            if ($countQtyRequest !== 0) {
                if ($peminjaman_item->qty >= $countQtyRequest) {
                    foreach ($request->qty as $key => $value) {
                        $peminjaman_item->pengembalian_item()->create([
                            'qty' => $value,
                            'ketarangan_status' => $request->ketarangan_status[$key],
                            'denda' => $request->denda[$key]
                        ]);
                    }
                    return back()->with('success', 'Berhasil Mengembalikan');
                } else {
                    return back()->with('error', 'Melebihi Dengan Jumlah Qty Peminjaman');
                }
            } else {
                return back()->with('error', 'Tidak Sesuai Dengan Jumlah Qty Peminjaman');
            }
        } else {
            return false;
        }
    }

    // tambahkan edit pengembalian
}
