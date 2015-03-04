<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
    if(!Auth::check()){
    	return View::make('main');
    }else{
    	return View::make('dashboard')->with('user', Auth::user());
    }
});

/*
 * Users
 */
Route::post('/', "UserController@login");
Route::get('logout', "UserController@logout");

/*
 * Tasks
 */
Route::controller('log', 'LogController');
