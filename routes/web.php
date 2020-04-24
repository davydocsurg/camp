<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
Use App\Post;
use App\Category;
use App\Comment;
use DB;
Use Auth;

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
// Route::post('/comment/{id}', 'PostController@comment');
Route::post('/search', 'PostController@search')->name('search');
// Route::any ( '/search', function(Request $request) {
//     // $user_id = Auth::user()->id;
//     // $search = Input::get('search');    
//     $keyword = $request->search;
//     $posts = Post::where('post_title', 'LIKE', '%'.$keyword.'%')
//     ->orWhere('post_body','LIKE','%'.$keyword.'%')->get();
//     return view("/search ",["keyword" => $keyword, "posts" => $posts]);
// });