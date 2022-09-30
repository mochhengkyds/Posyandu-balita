<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginUI()
    {
        return view('login.v_login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'admin'])) {
            return redirect('/dashboard');
        } elseif (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 'bidan'])) {
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('message', 'username atau password anda salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
