<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(Request $request){
        return view("home");
    }

    public function login(Request $request){
        return view("login");
    }

    public function register(Request $request){
        return view("register");
    }

    public function photos(Request $request){
        return view("photos");
    }
}
