<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::view("/", "posts.home")->name("home");

Route::view("/register", "auth.register")->name("register");
Route::post("/register", [authController::class, "register"]);