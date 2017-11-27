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
use App\Post;

Route::get('/', function () {
	$posts = Post::latest()->paginate(5);
    return view('welcome',compact('posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
# Batasi hak akses cara kesatu
Route::middleware('auth')->group(function(){
    Route::get('/post', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/create', 'PostController@store')->name('post.store');
    Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
    Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
});
/* Batasi hak akses cara kedua
Route::get('/post', 'PostController@index')->name('post.index')->middleware('auth');
*/
Route::get('/artikel/{post}', 'PostController@details')->name('post.details');
Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');