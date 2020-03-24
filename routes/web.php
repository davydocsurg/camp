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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('category', 'CategoryController@category')->middleware('auth');
Route::post('addCategory', 'CategoryController@addCategory')->middleware('auth');
Route::get('include', 'PostController@post')->middleware('auth');
Route::post('/addPost', 'PostController@addPost')->middleware('auth');
Route::get('/edit/{id}', 'PostController@edit')->middleware('auth');
Route::post('/edit/{id}', 'PostController@editPost')->middleware('auth');
Route::get('/delete/{id}', 'PostController@deletePost')->middleware('auth');
Route::get('/view/{id}', 'PostController@view');
// Route::get('/category/{id}', 'PostController@category')->middleware('auth');
Route::get('navy', 'CategoryController@navy');
Route::get('/category/{id}', 'PostController@category');