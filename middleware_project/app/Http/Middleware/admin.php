<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;
use Auth;

class admin extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        // if (!Auth::check()) {
        //     return redirect('/login')->with('message', 'Please login first');
        // }

        // if (Auth::user()->role !== "admin") {
        //     return redirect('/home')->with('message', 'You are not an admin');
        // }

        // return $next($request);

        if (Auth::check()) {
            // Check if the authenticated user is an admin
            if (Auth::user()->role == "admin") {
                return $next($request);
            } elseif (Auth::user()->role == "user") {
                return redirect('/home')->with('message', 'You are not an admin');
            }
        } else {
            return redirect('/login')->with('message', 'Please login first');
        }
    }
}


