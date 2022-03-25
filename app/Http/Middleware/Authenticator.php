<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class Authenticator extends BaseMiddleware
{
   /**
     * Handle an incoming request.
     *
    * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return view('auth.login');
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return view('auth.login');
            }else{
                return view('auth.login');
            }
        }
        return $next($request);
    }
}
