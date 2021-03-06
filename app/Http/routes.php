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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('profile', 'ProfileController', ['only' =>[
	'index', 'store', 'update'
]]);

Route::resource('friend', 'FriendController', ['only' =>[
	'index', 'destroy', 'store'
]]);

Route::resource('twit', 'TwitController', ['only' =>[
	'store'
]]);
