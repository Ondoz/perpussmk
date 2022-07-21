<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\PeminjamanItem;
use App\Models\User;
use App\Rules\CurrentPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $topBook = $this->topBook(8);
        $newBook = $this->newBook(12);
        return view('home', compact('topBook', 'newBook'));
    }

    public function profile()
    {
        return view('profile');
    }

    protected function topBook($limit = 4)
    {
        $ids = PeminjamanItem::with('buku.media')->select('buku_id', DB::raw(' COALESCE(sum(qty),0)  as total'))
            ->groupBy('buku_id')
            ->orderByRaw('total DESC')
            ->limit($limit)
            ->get();
        // $book = Buku::whereIn('id', $ids)->orderBy()->take($limit)->get();
        return $ids;
    }

    protected function newBook($limit = 4)
    {
        $book = Buku::inRandomOrder()->with('media')->take($limit)->get();
        return $book;
    }

    public function profileSetting(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('profile');
        };

        if ($user) {
            $user->update([
                'name' => $request->name,
            ]);

            $user->user_details()->update([
                'alamat' => $request->alamat,
                'no_phone' => $request->phone
            ]);
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', new CurrentPassword()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $user = auth()->user();
        $user->update([
            'password'  => Hash::make($request->password)
        ]);
        Alert::success('Your password has been updated successfully')->flash();
        return back();
    }
}
