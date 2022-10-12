<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function index() {
        return view('settings');
    }

    public function modify(Request $request) {

        $request->validate([
            'name' => ['required', 'unique:users', 'string', 'max:255', 'min:5'],
        ]);

        $user = User::where('name', Auth::user()->name)->get();
        $user = $user[0];

        $user->name = $request->name;

        $user->update();

        return Redirect::back();
    }
}
