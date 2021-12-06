<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', '11')->first();

        // return $peminjaman;

        return view('test', compact('peminjaman'));
    }
}
