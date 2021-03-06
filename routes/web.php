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

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::resource('posts', 'PostController');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);

Auth::routes();

Route::get('/home', 'HomeController@index');
