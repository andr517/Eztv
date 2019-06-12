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

Route::get('/teams', 'TeamsController@teams');
Route::get('/teams/team/{id}', 'TeamsController@team');
Route::get('/createTeam', 'TeamsController@createTeamView');
Route::post('/teams/createTeam', 'TeamsController@createTeamPost');

Route::get('/matches', 'PagesController@matches');
Route::get('/profile', 'PagesController@profile');

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@post');
Route::get('/posts/edit/{id}', 'PostsController@edit');
Route::post('/posts/edit/{id}', 'PostsController@editsave');
Route::post('/posts/create', 'PostsController@createsave');
Route::get('/posts/delete/{id}', 'PostsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@logout');
