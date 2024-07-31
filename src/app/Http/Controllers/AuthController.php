<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/dashboard')->with('result', 'ログインしました');
        } else {
            return redirect('/login')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function getLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with('result', 'ログアウトしました');
    }
}
