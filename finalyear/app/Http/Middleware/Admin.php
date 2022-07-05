<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        {
            if(Auth::user()->usertype =='admin'){
                return $next($request);

            }
            else{
                return redirect('/')->with('Status', 'You are not allowed');

            }

        }
    }
}
//For middleware you create middleware by php artisan make:middleware Admin then add in kernel, after that in web.php and then in your controller method
