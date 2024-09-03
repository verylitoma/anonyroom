<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authController extends Controller
{
    public function register(Request $request){
        //validate
        $fields = $request->validate([
            "username" => ["required", "max:15"],
            "email" => ["required", "max:255", "email", "unique:users"],
            "password" => ["required", "min:3", "confirmed"],
        ]);

        //register
        $user = User::create($fields);

        //login
        Auth::login($user);

        //redirect
        return redirect()->route("home");
    }

    public function login(Request $request){
        //validate
        $fields = $request->validate([
            "email" => ["required", "max:255", "email"],
            "password" => ["required", "min:3"],
        ]);

        //attempt to login
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended();
        }else {
            return back()->withErrors([
                "failed" => "Failed Authentification"
            ]);
        }
    }
}
