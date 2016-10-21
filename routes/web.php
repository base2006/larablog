<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');

Route::resource('posts', 'PostController');

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle', 'as' => 'blog.single'])
	->where('slug', '[\w\d\-\_]+');

Auth::routes();

Route::get('/home', 'HomeController@index');
