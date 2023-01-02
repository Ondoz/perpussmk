<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('user_details')->orderBy('id', 'desc')->paginate(10);
        return view('admin.user.index', compact('user'));
    }

    public function search(Request $request)
    {
        $user = User::search($request->search)->query(function ($builder) {
            $builder->with('user_details');
        })->orderBy('id', 'desc')->paginate(10);
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return back();
    }


    public function destroy($id)
    {
        $user = User::where('id', $id)->firstorfail();
        $user->delete();
        return back();
    }
}
