<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $information = Information::paginate(10);

        return view('information', compact('information'));
    }
}
