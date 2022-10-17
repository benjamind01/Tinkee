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

    public function modify(Request $request, $id) {

        $link = Link::where('id', $id);

        if($link->get()->isEmpty() == true) {
            abort('404');
        }

        if($link->get()->first()->user_id != Auth::user()->id) {
            abort('401');
        }

        $validated = $request->validate([
            'name' => 'required|min:2',
            'link' => 'required|min:3|url'
        ]);

        $link->update(['nom' => $request->name, 'url' => $request->link]);

        return redirect('/dashboard');
    }

    public function delete(Request $request, $id) {
        
        $link = Link::where('id', $id);

        if($link->get()->isEmpty() == true) {
            abort('404');
        }

        if($link->get()->first()->user_id != Auth::user()->id) {
            abort('401');
        }
        
        $link->delete();

        



        return redirect('/dashboard');
    }
}
