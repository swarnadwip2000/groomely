<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Carbon\Carbon;
use Session;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $reques< 
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
     
        if (Auth::check()) {
            $user = User::where('id', Auth::user()->id)->first();
            $token_update_time = Session::get('token_update_time');
            if ($user->password_update_time == null) {
                return $next($request);
            } else {
                if ($user->password_update_time > $token_update_time) {                                          
                    return response()->json(['message'=> 'unauthenticate'],401);           
                } else {
                    return $next($request);
                }
            }
            
        }
    }
        
}