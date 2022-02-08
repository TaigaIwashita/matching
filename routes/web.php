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

/*
ホーム画面
Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'PostController@index');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    
    Route::get('/games/create', 'PostController@GameCreate');
    Route::post('/games', 'PostController@GameStore');
    Route::get('/games/{game}', 'GameController@index');
    
    Route::get('/user', 'UserController@index');
    
    Route::delete('/posts/{post}', 'PostController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
