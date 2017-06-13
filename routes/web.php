<?php

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
Route::post('/addPilihTeam', 'PilihTeamController@addPilihTeam');

Route::get('/inputStatistik', 'StatistikController@inputStatistik');
Route::post('/addStatistik', 'StatistikController@addStatistik');

Route::get('/listPertandingan', 'ListPertandingan@index');
Route::get('/listPertandingan/{id}', 'ListPertandingan@show');

Route::get('/team/{team}', 'ListPertandingan@team');
