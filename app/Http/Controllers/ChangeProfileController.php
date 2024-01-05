<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangeProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_password()
    {
        return view('pages.backend.setting.index');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('home')->with('update', 'Password Updated !');
    }

    public function index_profile()
    {
        return view('pages.backend.profile.index');
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        User::find(auth()->user()->id)->update(['name'=> $request->name]);

        return redirect()->route('home')->with('update', 'Profile Updated !');
    }
}
