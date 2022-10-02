<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $user = User::find(1);
        $links = Link::latest()->limit(6)->get();
        return view('main.main', compact('user', 'links'));
    }

    public function videos(){
        $user = User::find(1);
        $links = Link::paginate(9);
        return view('main.videos', compact('user', 'links'));
    }
}
