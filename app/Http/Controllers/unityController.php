<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unityController extends Controller
{
    public function uploadPhoto(Request $request){
        $request->validate([
            "user_photo" => ["required"]
        ]);
    }

    public function getStartGameUser(Request $request){
        return 1;
    }
}
