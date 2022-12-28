<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */



     public function handle($request, Closure $next)
     {
        //jika akun yang login sesuai dengan role maka akan di berikan akses jika tidak sesuai maka akan diarahkan kembali ke home

         $roles = array_slice(func_get_args(), 2);

         foreach ($roles as $role) {
             $user = Auth::user()->role;
             if( $user == $role){
                 return $next($request);
             }
         }

         return redirect('/');
     }

}
