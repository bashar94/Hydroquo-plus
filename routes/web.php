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

Route::get('/', 'LandingPageController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/{id}/{slug}', 'BlogController@view');






Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'admin.profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'admin.profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'admin.profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard/new', 'PostController@newPosts')->name('new');
	Route::get('dashboard/posts', 'PostController@viewAllPosts')->name('posts');
	Route::get('dashboard/edit/{id}', 'PostController@editPost')->name('edit');
});