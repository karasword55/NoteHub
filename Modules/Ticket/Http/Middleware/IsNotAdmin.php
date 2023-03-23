<?php

namespace Modules\Ticket\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsNotAdmin
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

        if(Auth::check()){

            if(Auth::user()->id !=2){
                return $next($request);
            }else{  
                error_log('Admin değil, sadece kullanıcı');
						
                redirect()->to('http://127.0.0.1:8000/login');
            }
        }else{
            error_log('Login olman lazım');
            redirect()->to('http://127.0.0.1:8000/login');
        }

        abort(403);
        //return $next($request);
    }
}
