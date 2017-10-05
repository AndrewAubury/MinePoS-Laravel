<?php
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Set up the routes to enable the authentication and admin backend to show


Route::get('/admin/login/', 'AdminController@login')->name("login");
Route::post('/admin/login', 'AdminController@authenticatePost');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin/admins/', 'AdminController@admins');
	Route::get('/admin/', 'AdminController@index');
	Route::get('/admin/logout/', 'AdminController@logout');
	Route::put('/admin/admins/create/','AdminController@createAdmin');
});




Route::get('/', function () {
return view('welcome');
});
