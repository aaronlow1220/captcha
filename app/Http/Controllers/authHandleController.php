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
        return redirect()->route("pages.home");
    }

    public function login(Request $request){
        $this->validate($request, [
            "cEmail" => ["required", "email"],
            "cPassword" => ["required"],
        ]);

        $data = [
            "email" => $request->cEmail,
            "password"=>$request->cPassword,
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route("pages.home");
        }

        return back()->with([
            "error" => "登入失敗！請檢查帳號與密碼是否正確",
        ])->withInput($request->only("cEmail"));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("pages.home");
    }
}
