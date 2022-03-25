<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    public function showLogin(){
        return view('auth.login');
    }

    public function showDashboard(){
        return view('dashboard');
    }

    public function root(){
        if(Auth::check() === true) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }else {
           return redirect()->route('login');
        }
        return abort(404);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $credentials){

        $credentials = request(['email', 'password']);

        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['error' => 'E-mail ou senha inválidos'], 404);
        }

        return redirect()->route('dashboard');

    }

     /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
