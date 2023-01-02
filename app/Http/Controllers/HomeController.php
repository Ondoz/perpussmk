<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
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
        $newBook = GeneralHelper::newBook(12);
        return view('home', compact('topBook', 'newBook'));
    }

    public function details($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->first();
        return view('buku-detail', compact('buku'));
    }


    public function search(Request $request)
    {
        $buku = Buku::search($request->buku)->query(function ($builder) {
            $builder->with('detail_buku')->with('media');
        })->paginate(12);

        return view('buku', compact('buku'));
        // return $search;
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



    public function profileSetting(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->clearMediaCollection('profile');

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

        return back();
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
