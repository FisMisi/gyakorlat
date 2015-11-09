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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
#Route::get('auth/register',['middleware'=>'auth', 'uses' => 'Auth\AuthController@getRegister']);
#Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('articles','PostController');
    Route::resource('tags','TagController');

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('about', function()
//{
//    return View::make('pages.about');
//});
//
//Route::get('projects', function()
//{
//    return View::make('pages.projects');
//});
//
//Route::get('contact', function()
//{
//    return View::make('pages.contact');
//});