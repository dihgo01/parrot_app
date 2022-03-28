<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function showDashboard()
    {
        return view('index');
    }

    public function root()
    {
        if (Auth::check() === true) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function login(Request $credentials)
    {

        $credentials = request(['email', 'password']);

        $token = Auth::attempt($credentials);

        if (!$token) {


        }

        return redirect(route('dashboard'))->with('success')->with('loader',true);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
