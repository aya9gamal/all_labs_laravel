<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
class Age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        
    //     $dateOfBirth = '1994-07-02';

    //     $years = Carbon::parse($dateOfBirth)->age;   
    //  return  $years;
        // return Carbon::parse(auth()->user()->birth_day)->age;
      
        if(Carbon::parse(auth()->user()->birth_day)->age >30){
            return $next($request);
        }
        else{
            return redirect()->route('dashboard');
        }
    }
}
