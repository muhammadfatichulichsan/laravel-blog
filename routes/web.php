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

Route::get('/','PostController@tampil');

//singlemiddleware
//middlewareGroup

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/hasilpencarian', 'PostController@search');
Route::get('/kategori/{id}','PostController@showkt')->name('showkate');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{slug}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');
Route::get('/forum/','ForumController@index')->name('forum.index');
Route::post('/forum/create','ForumController@store')->name('forum.store');
Route::get('/forum/create','ForumController@create')->name('forum.create');
Route::get('/forum/{forum}','ForumController@show')->name('forum.show');
