<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    public function update(Request $request)
    {
        $setting = Setting::where('key', $request->key)->first();
        if ($setting) {
            $setting->update([
                'value' => $request->value
            ]);

            return true;
        } else {
            return false;
        }
    }
}
