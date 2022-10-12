<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index() {
        $user = User::where('name', Auth::user()->name)->get();
        $user = $user[0];

        return view('/statistics', ['user' => $user]);
    }
}
