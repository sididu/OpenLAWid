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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});



Route::get('rp0', 'HomeController@rp0');
Route::get('rp1', 'HomeController@rp1');
Route::get('rp2', 'HomeController@rp2');
Route::get('rp3mum', 'HomeController@rp3mum');
Route::get('rp3sus', 'HomeController@rp3sus');
Route::get('rb1', 'HomeController@rb1');
Route::get('rt1', 'HomeController@rt1');

Route::get('dashboard2', 'HomeController@dashboard2');
Route::get('settings', 'HomeController@settings');
Route::get('master', 'HomeController@master');
Route::get('tmp', 'HomeController@tmp');

Route::get('frp1', 'HomeController@frp1');
Route::get('frp2', 'HomeController@frp2');
Route::get('frp3mum', 'HomeController@frp3mum');
Route::get('frp3sus', 'HomeController@frp3sus');
Route::get('frb1', 'HomeController@frb1');
Route::get('frb2', 'HomeController@frb2');
Route::get('frt1', 'HomeController@frt1');
Route::get('frt2', 'HomeController@frt2');
/*

Route::get('frp1', 'AdminController@frp1');
Route::get('frp2', 'AdminController@frp2');
Route::get('frp3mum', 'AdminController@frp3mum');
Route::get('frp3sus', 'AdminController@frp3sus');
Route::get('frb1', 'AdminController@frb1');
Route::get('frb2', 'AdminController@frb2');
Route::get('frt1', 'AdminController@frt1');
Route::get('frt2', 'AdminController@frt2');
Route::get('pages', 'PagesController@index');
*/