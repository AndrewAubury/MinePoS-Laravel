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

	public function tfa(){
		return view('admin.pages.tfa');
	}
	public function authenticatePost(){
		if (Auth::attempt(['username' =>request("username"), 'password' => request("password")])) {
            // Authentication passed...
			return redirect()->action('AdminController@index')->with('good', 'You have been logged in.');

		}else{
			return redirect()->action('AdminController@index')->with('bad', 'Incorrect Login.');
		}
	}

	public function logout(Request $request){
		$request->session()->forget('tfa_passed');
		
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
	public function editAdmin(\App\Admin $adminID){
		if($adminID->id == Auth::user()->id){
			return redirect()->action('AdminController@admins')->with('bad', 'To edit your own account please use the User settings button located on the top menu.');
		}
		if($adminID->superadmin == 1){
			return redirect()->action('AdminController@admins')->with('bad', 'You may not edit a super user account.');
		}

		if(request("username") != null){
			$adminID->username = request("username");
		}
		if(request("password") != null){
			$adminID->password = request("password");
		}
		if(request("email") != null){
			$adminID->email = request("email");
		}
		$adminID->save();
		return redirect()->action('AdminController@admins')->with('good', 'Account '.$adminID->username.' updated.');
	}

	public function deleteAdmin(\App\Admin $adminID){
		if($adminID->id == Auth::user()->id){
			return redirect()->action('AdminController@admins')->with('bad', 'You may not delete your own account');
		}
		if($adminID->superadmin == 1){
			return redirect()->action('AdminController@admins')->with('bad', 'You may not delete a super user account.');
		}

		$adminID->delete();
		return redirect()->action('AdminController@admins')->with('good', 'Account '.$adminID->username.' deleted.');
	}
}
