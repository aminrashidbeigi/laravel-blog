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

Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact')->name('contact');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');


Route::get('blog/{slug}', 'BlogController@getPost')->name('blog.show.slug');
Route::get('blog/{post}', 'PagesController@blogShow')->name('blog.show');
Route::get('blog', 'BlogController@blogIndex')->name('blog.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
