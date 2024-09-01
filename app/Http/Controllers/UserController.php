<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view("users.register");
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "password" => "required | confirmed | min:4",
        ]);

        // Hash Password
        $formFields["password"] = bcrypt($formFields["password"]);

        // Create User
        $user = User::create($formFields);

        // Login
        Auth::login($user);
        // auth()->login($user);

        return redirect("/")->with("message", "User created and logged in!");
    } 

    // Logout User
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with("message", "Logged out!");
    }

    // Show Login Form
    public function login() {
        return view("users.login");
    }

    // Login User
    public function auth(Request $request) {
        $formFields = $request->validate([
            "email" => ["required", "email"],
            "password" => "required"
        ]);

        if (Auth::attempt($formFields)) {
            $request->session()->regenerate();
            return redirect("/")->with("message", "Logged in!");
        }

        return back()->withErrors(["email" => "Invalid Credentials"]);
    }
}
