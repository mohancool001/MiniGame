<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//Auth Required
Route::get('/home', 'HomeController@index');
Route::get('/game','HomeController@stgame');
Route::post('/game','HomeController@chgame');

//Admin Access
Route::get('/admin','HomeController@adcheck');
Route::post('/admin','HomeController@admin');

//No Restrict
Route::get('/contact','BaseController@contact');
Route::get('/leaderboard','BaseController@leader');
Route::get('/rules','BaseController@rules');

//FacebookAPI
Route::get('/facebook','Auth\AuthController@redirectAPI');
Route::get('/facebook/callback','Auth\AuthController@fbcallback');
