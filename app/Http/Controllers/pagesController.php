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
        $photos = photo::where("user", Auth::user()->uuid)->orderBy("created_at", "desc")->get();
        return view("photos", ["photos" => $photos]);
    }

    public function play(Request $request)
    {
        return view("play");
    }

    public function start(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("pages.login");
        }

        $user = Auth::user();
        return view("start" , ["user"=>$user]);
    }

    public function authenticate(Request $request, $userid){
        $user = user::where("uuid", $userid)->first();
        $count = $user->play_count + 1;
        $user->update(["player_count"=>$count]);
        return "OK";
    }
}
