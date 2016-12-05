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


Route::get('/alumnilogin', 'PagesController@index');
// Account type checker goes here
// If alumni,
Route::get('/dashboard', 'AlumniController@dashboard');
Route::post('/paymentassessment', 'AlumniController@paymentassessment');
Route::post('/addrequest', 'AlumniController@addrequest');
Route::post('/updateaccount', 'AlumniController@updateaccount');
Route::get('/requestrecord', 'AlumniController@requestrecord');

// Else if staff,
// Route::get('/account', 'StaffController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index');
