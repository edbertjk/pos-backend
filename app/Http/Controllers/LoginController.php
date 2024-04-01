<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("login");
    }

    public function showRegist() {
        return view('register');
    }

    public function regist(Request $request) {
        $validated = $request->validate([
            'name' => "required|min:3",
            'email' => "required",
            'role' => "required",
            'password' => "required|min:5"
        ]);
        $passwordEncrypt = bcrypt($request->password);
        $validated['password'] = $passwordEncrypt;

        if (User::create($validated)) {
            return redirect('/');
        }
    }

    public function attempt(Request $request) {
        $validated = $request->validate([
            'email' => "required|email",
            'password' => "required|min:5"
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/product');
        }else{
            return redirect('/product');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
