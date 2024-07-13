<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }

    public function register() {
        return view("auth.register");
    }   

    public function register_user(Request $request) {
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:5"
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $res = $user->save();
        if($res) {
            return back()->with("success", "User created successfully");
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }
}
