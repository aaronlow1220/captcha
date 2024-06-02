<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\photo;

class pagesController extends Controller
{
    public function home(Request $request)
    {
        $user = Auth::user();
        return view("home", ["user" => $user]);
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route("pages.home");
        }
        return view("login");
    }

    public function register(Request $request)
    {
        return view("register");
    }

    public function photos(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("pages.login");
        }
        $photos = photo::where("user", Auth::user()->uuid)->get();
        return view("photos", ["photos" => $photos]);
    }
}
