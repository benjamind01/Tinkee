<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(string $name) {
        $user = User::where('name', $name)->first();

        if($user == null) {
            abort('404');
        }

        $links = Link::where('user_id', $user->id)->get();
        
        return view('profile', ["links" => $links, "user" => $user]);
    }
}
