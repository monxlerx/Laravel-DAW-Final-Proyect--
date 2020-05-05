<?php

namespace App\Http\Middleware;

use Closure;

class Teacher
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
        if ($request->user() && $request->user()->type != 'teacher')
        {
        return new Response(view('unauthorized')->with('role', 'TEACHER'));
        }
        return $next($request);
        }
}
