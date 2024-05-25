<?php

use App\Http\Controllers\authHandleController;
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
});