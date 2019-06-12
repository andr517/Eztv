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

Route::get('/teams', 'PagesController@teams');
Route::get('/teams/team/{id}', 'PagesController@team');
Route::get('/matches', 'PagesController@matches');
Route::get('/forums', 'PagesController@forums');
Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/edit', 'ProfileController@edit');
Route::post('/profile/edit', 'ProfileController@update');


Route::get('/', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@post');
Route::get('/create', 'PostsController@create');
Route::post('/posts/create', 'PostsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@logout');
