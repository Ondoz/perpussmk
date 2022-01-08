<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $buku = Buku::where('judul', 'test')->first();
        $gas = $buku->update([
            'code' => $buku->sku,
            'judul' => 'test',
            'penulis' => 'kita bisa',
        ]);
        return $gas;
    }
}
