<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        $links = Link::latest()->limit(6)->get();
        return view('main.main', compact('links', 'setting'));
    }

    public function videos(){
        $setting = Setting::find(1);
        $links = Link::paginate(9);
        return view('main.videos', compact('setting', 'links'));
    }
}
