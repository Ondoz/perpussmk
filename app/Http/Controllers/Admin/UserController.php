<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        } else {
            abort(404);
        }
    }
}
