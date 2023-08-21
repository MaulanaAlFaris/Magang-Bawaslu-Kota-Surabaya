<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$rules): Response
    {
        if(!Auth::check()){
            return redirect('login');
        }

        $user = Auth::user();
        //admin kota bisa mengakses semua
        if($user->level==2){
            return $next($request);
        }
        //admin kecamatan hanya bisa mengakses sesuai kecamatannya
        if($user->level==3 && in_array($rules,[34,35,36,37])){
            return $next($request);
        }
        if($user->level == $rules)
            return $next($request);

            return redirect('login')->with('error',"Kamu tidak memiliki akses");
            
    }
}
