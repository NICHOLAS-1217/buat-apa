<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res) {
            // return back()->with("success", "User created successfully");
            return redirect("/login");
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }

    public function login_user(Request $request) {
        $request->validate([
            "username" => "required",
            "email" => "required|email",
            "password" => "required|min:5"
        ]);
    
        $user = User::where("email", $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put("logged_user", $user->id);
                return redirect("/tasks");
            } else {
                return back()->with("fail", "Invalid password");
            }
        } else {
            return back()->with("fail", "No user found");
        }
    }
    
    public function profile() {
        $data = null;
        if (Session::has("logged_user")) {
            $data = User::where("id", Session::get("logged_user"))->first();
        } else {
            return redirect("/login");
        }
        return view("auth.profile", compact("data"));
    }

    public function logout(){
        if (Session::has("logged_user")) {
            Session::pull("logged_user");
            return redirect("/login");
        }
    }
    
}
