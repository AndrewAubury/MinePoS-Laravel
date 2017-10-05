<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Admin;
use Carbon\Carbon;
class AdminController extends Controller
{


    public function index(){
    		return view('admin.index');
    }

    public function login(){
    		return view('admin.index');
    }

    public function authenticatePost(){
    	if (Auth::attempt(['username' =>request("username"), 'password' => request("password")])) {
            // Authentication passed...
            return redirect()->action('AdminController@index')->with('good', 'You have been logged in.');

        }else{
    		return redirect()->action('AdminController@index')->with('bad', 'Incorrect Login.');
        }
    }

    public function logout(){
    	if(Auth::check()){
    		Auth::logout();	
    	}
    		return redirect()->action('AdminController@index')->with('good', 'You have been logged out.');
    }

    public function admins(){
    	return view('admin.pages.admins');
    }
   
    public function createAdmin(){
    	$newAccount = new Admin;
        $newAccount->username = request("username");
        $newAccount->email = request("email");
        $newAccount->password = request("password");
        $newAccount->last_login = Carbon::now();
        $newAccount->save();
    	return redirect()->action('AdminController@admins')->with('good', 'Account "'.request("username").'" has been created!');
    }

}
