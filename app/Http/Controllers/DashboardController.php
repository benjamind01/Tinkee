<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $links = Link::where('user_id', Auth::user()->id)->get();


        return view('Dashboard', ['links' => $links]);
    }

    public function add() {

        return view('DashboardAdd');

    }
}
