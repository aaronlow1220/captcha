<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class authHandleController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            "cUsername" => ["required"],
            "cEmail" => ["required", "email", "unique:users,email"],
            "cPassword" => ["required"],
            "cConfirmPassword" => ["required", "same:cPassword"],
        ]);

        $data = [
            "username" => $request->cUsername,
            "uuid" => Helper::prefixedUuid("user_"),
            "email" => $request->cEmail,
            "password" => Hash::make($request->cPassword),
            "play_count" => 1,
            "status" => 1,
            "is_admin" => 0,
        ];

        user::create($data);
        // dd($request);
    }
}
