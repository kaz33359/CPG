<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('STUDENT_LOGIN')) {
        } else {
            $request->session()->flash('error', 'Please Login To Access Dashboard');
            return redirect('student');
        }
        return $next($request);
    }
}
