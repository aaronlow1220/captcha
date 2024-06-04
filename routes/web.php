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
});

Route::name("auth.")->group(function () {
    Route::post("/registerHandle", [authHandleController::class, "register"])->name("registerHandle");
    Route::post("/loginHandle", [authHandleController::class, "login"])->name("loginHandle");
    Route::get("/logoutHandle", [authHandleController::class, "logout"])->name("logoutHandle");
});

Route::name("unity.")->group(function () {
    Route::get("/unity/getStartGameUser", [unityController::class, "getStartGameUser"])->name("getStartGameUser");
});

// --- Test ---
Route::name("test.")->group(function () {
    Route::get("/testingOnly/imageUploadPage", [pageTestController::class, "testImageUploadPage"])->name("testImageUploadPage");
    Route::post("/testingOnly/imageUpload", [pageTestController::class, "testImageUpload"])->name("testImageUpload");
});