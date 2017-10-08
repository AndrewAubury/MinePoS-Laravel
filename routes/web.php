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
Route::get('/admin/tfa/','AdminController@tfa');
Route::group(['middleware' => ["auth","tfa"]], function () {
	Route::get('/admin/admins/', 'AdminController@admins')->name("admin.admins");
	Route::get('/admin/', 'AdminController@index')->name("admin.index");
	Route::get('/admin/logout/', 'AdminController@logout');
	Route::put('/admin/admins/create/','AdminController@createAdmin');
	Route::post('/admin/admins/edit/{adminID}','AdminController@editAdmin');
	Route::delete('admin/admins/delete/{adminID}','AdminController@deleteAdmin');

	Route::get('/admin/servers/','AdminServer@index')->name("admin.servers");
	Route::put('/admin/servers/create/','AdminServer@create');
	Route::post('/admin/servers/edit/{server}','AdminServer@edit');
	Route::delete('/admin/servers/delete/{server}','AdminServer@delete');

	Route::post('/admin/profile/update/','AdminSettingsController@formSubmit');
});




Route::get('/', function () {
return view('welcome');
});
