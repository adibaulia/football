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

Route::get('/', 'LandingPage@index');
Route::get('/home', function(){
  return redirect('/dashboard');
});
Route::get('/dashboard', 'Dashboard@index');

Route::get('/register', 'RegisterController@getRegister');

Route::post('/postRegister', 'RegisterController@postRegister');

Route::get('/login', 'LoginController@getLogin')->name('login');
Route::post('/checkLogin', 'LoginController@checkLogin');
Route::get('/logout', function(){
  Auth::logout();
  return redirect('/');
});

Route::get('/insertPertandingan', 'Dashboard@insertPertandingan');
Route::post('/addPertandingan', 'Dashboard@addPertandingan');
Route::get('/insertTeam', 'Dashboard@insertTeam');
Route::post('/addTeam', 'Dashboard@addTeam');

Route::get('/pilihTeam', 'PilihTeamController@getTeam');
