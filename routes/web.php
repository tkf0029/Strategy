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
    return view('index');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::get('/item', 'ItemController@index');
Route::get('/item/create', 'ItemController@create');
Route::post('/item', 'ItemController@store');

Route::get('/tactical', 'TacticalBoardController@index');
Route::get('/tactical/create', 'TacticalBoardController@create');
Route::get('/tactical/{tactical_board}', 'TacticalBoardController@show');
Route::post('/tactical', 'TacticalBoardController@store');

Route::get('/tweets', 'TweetController@index');
Route::get('tweets/create', 'TweetController@create');
Route::post('/tweets', 'TweetController@store_tweet');