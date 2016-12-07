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
Route::get('/editaccount', 'AlumniController@requestrecord');


Route::get('/user/account', 'PagesController@acct_user');
Route::get('/registration', 'PagesController@register');
Route::get('/superadmin','PagesController@superadmin_home');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/search', 'SearchController@search');

// Else if staff,
// Route::get('/account', 'StaffController@dashboard');

Auth::routes();
