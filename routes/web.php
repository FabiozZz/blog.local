<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PostController@index')->name('blog.index');
Route::resource('post', 'PostController')->names('post');
Route::get('search', 'PostController@search')->name('post.search');
//Route::get('post/index', 'PostController@index')->name('post.index');
//Route::get('post/search', 'PostController@search')->name('post.search');
Route::middleware('auth');
Auth::routes();
