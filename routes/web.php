<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::view("/", "posts.home")->name("home");

Route::view("/register", "auth.register")->name("register");
Route::post("/register", [authController::class, "register"]);

Route::view("login", "auth.login")->name("login");
Route::post("/login", [authController::class, "login"]);