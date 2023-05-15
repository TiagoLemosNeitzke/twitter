<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && session()->get('ip') !== $request->ip())
        {
            Mail::raw('Your account has been logged out because your IP address has changed.', function ($message) {
                $message->to(auth()->user()->email)->subject('Account logged out');
            });
            auth()->logout();
            session()->invalidate();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
