<?php

namespace App\Http\Middleware;

use Closure;

class Myauth
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
        $userID = session()->get('userID');
        if($userID == ''){
            return redirect(url('/login'));
        }else{
            return $next($request);
        }
    }
}
