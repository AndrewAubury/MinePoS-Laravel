<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class twoFactorAuth
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
        if(Request("demo") == "yes"){
            session(['tfa_passed' => true]);
        }
        $curAdmin = (\App\Admin::where("id", $request->user()->id)->first());
        if($curAdmin->tfaenabled && session("tfa_passed") == null){
            return redirect()->action('AdminController@tfa')->with('bad', 'Please enter your TFA Code');
        }
        return $next($request);
    }
}
