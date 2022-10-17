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

        $totalClicks = 0;

        foreach($user->links as $link) {
            $totalClicks += $link->clicks;
        }


        return view('/statistics', ['user' => $user, 'totalClicks' => $totalClicks]);
    }
}
