<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminSettingsController extends Controller
{
     public function formSubmit(){
     if(request("email") != request("emailConf")){
     return redirect()->action('AdminController@index')->with('bad', 'The emails did not match');
     }
     if(request("email") == request("emailConf") && request("email") != null && request("email") != ""){
     	Auth::user()->email = request("email");
     	Auth::user()->save();
     }
     
     return redirect()->action('AdminController@index')->with('good', 'Your account has been updated');
    }
}
