<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "posts.home")->name("home");

Route::view("/register", "auth.register")->name("register");