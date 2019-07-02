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

// Profile
Route::resource('api/post', 'ProfilesController');
Route::resource('api/portfolio', 'ProfilesController');

// Portfolio
Route::resource('api/portfolio', 'PortfoliosController');

// // Post
// Route::resource('api/post', 'PostsController');

Route::get('/{any}', function () {
    //全てのリクエストに対してapp.blade.phpを返す
    return view('app');
})->where('any','.*');

Auth::routes();
