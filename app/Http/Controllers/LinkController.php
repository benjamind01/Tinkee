<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|min:2',
            'link' => 'required|min:3|url'
        ]);

        Link::create([
            'nom' => $request->name,
            'url' => $request->link,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/dashboard');


    }
}
