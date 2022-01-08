<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $topBook = $this->topBook(4);
        $newBook = $this->newBook(4);
        return view('home', compact('topBook', 'newBook'));
    }


    protected function topBook($limit = 4)
    {
        $book = Buku::with('media')->take($limit)->get();
        return $book;
    }

    protected function newBook($limit = 4)
    {
        $book = Buku::with('media')->take($limit)->get();
        return $book;
    }
}
