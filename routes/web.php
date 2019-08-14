<?php
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
//insert data
route::get('/db','logincontroller@index');
route::resource('student','studentcontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/',function(){
	return view('welcome');
});