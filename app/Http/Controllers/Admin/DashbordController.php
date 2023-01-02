<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\PeminjamanItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller
{

    public function index()
    {
        $topBook = $this->topBook(8);
        $totalBook = Buku::count();
        $totalUser = User::count();
        $totalPeminjam = Peminjaman::count();
        return view('admin.index', compact('topBook', 'totalBook', 'totalUser', 'totalPeminjam'));
    }


    protected function topBook($limit = 4)
    {
        $ids = PeminjamanItem::with('buku.media')->select('buku_id', DB::raw(' COALESCE(sum(qty),0)  as total'))
            ->groupBy('buku_id')
            ->orderByRaw('total DESC')
            ->limit($limit)
            ->get();
        return $ids;
    }
}
