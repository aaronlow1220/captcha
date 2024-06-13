<?php

use App\Http\Controllers\authHandleController;
use App\Http\Controllers\pageTestController;
use App\Http\Controllers\unityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::name("pages.")->group(function () {
    Route::get("/", [PagesController::class, "home"])->name("home");
    Route::get("/login", [PagesController::class, "login"])->name("login");
    Route::get("/register", [PagesController::class, "register"])->name("register");
    Route::get("/photos", [PagesController::class, "photos"])->name("photos");
    Route::get("/play", [pagesController::class, "play"])->name("play");
    Route::get("/start", [pagesController::class, "start"])->name("start");
    Route::get("/authenticate/{userid}", [pagesController::class, "authenticate"])->name("authenticate");
});

Route::name("auth.")->group(function () {
    Route::post("/registerHandle", [authHandleController::class, "register"])->name("registerHandle");
    Route::post("/loginHandle", [authHandleController::class, "login"])->name("loginHandle");
    Route::get("/logoutHandle", [authHandleController::class, "logout"])->name("logoutHandle");
    Route::post("/playHandle", [authHandleController::class, "play"])->name("playHandle");
});

Route::name("unity.")->group(function () {
    Route::get("/unity/getStartGameUser", [unityController::class, "getStartGameUser"])->name("getStartGameUser");
});

// --- Test ---
Route::name("test.")->group(function () {
    Route::get("/testingOnly/imageUploadPage", [pageTestController::class, "testImageUploadPage"])->name("testImageUploadPage");
    Route::post("/testingOnly/imageUpload", [pageTestController::class, "testImageUpload"])->name("testImageUpload");
});