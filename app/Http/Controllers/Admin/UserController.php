<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('user_details')->paginate(10);
        // return $user;
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
