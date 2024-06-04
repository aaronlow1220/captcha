<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class pageTestController extends Controller
{
    // --- Testing Pages ---
    public function testImageUploadPage(Request $request)
    {
        return view("testing.imageUpload");
    }


    // --- Testing Handle
    public function testImageUpload(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("pages.login");
        }

        $field = "user_input";
        $user = Auth::user()->uuid;
        $path = "media/photos/" . $user;

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }

        if ($request->hasFile($field)) {
            $extension = $request->file($field)->getClientOriginalExtension();
            $fileName = $user . "_" . time() . "." . $extension;
            $request->file($field)->move(public_path($path), $fileName);
            $url = asset($path . "/" . $fileName);
            $data = [
                "uuid" => Helper::prefixedUuid("photo_"),
                "photo" => $url,
                "user" => $user,
                "status" => 1
            ];
            photo::create($data);
        }
        return redirect()->route("test.testImageUploadPage");
    }
}
