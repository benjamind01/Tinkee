<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $links = Link::where('user_id', Auth::user()->id)->get();


        return view('dashboard.index', ['links' => $links]);
    }

    public function add() {

        return view('dashboard.add');

    }

    public function modify($id) {
        $link = Link::where('id', $id)->get();

        if($link->isEmpty() == true) {
            abort('404');
        }

        if($link->first()->user_id != Auth::user()->id) {
            abort('401');
        }

        return view('dashboard.edit', ['link' => $link->first()]);

        
    }
}
