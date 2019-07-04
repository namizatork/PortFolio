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
Route::get('api/index/portfolio', 'PortfoliosController@index');
Route::get('api/index/post', 'PostsController@index');

// Portfolio
Route::get('api/portfolio', 'PortfoliosController@portfolio');

// Post
Route::get('api/post', 'PostsController@blog');

Route::get('/{any}', function () {
    //全てのリクエストに対してapp.blade.phpを返す
    return view('app');
})->where('any','.*');

Auth::routes();
