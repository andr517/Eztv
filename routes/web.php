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

Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/{id}', 'ProfileController@profile');
Route::get('/profile/edit', 'ProfileController@edit');
Route::post('/profile/edit', 'ProfileController@update');
Route::get('/profile/info', 'ProfileController@info');
Route::get('/profile/teams', 'ProfileController@teams');

Route::get('/users', 'UserController@userList');
Route::get('/users/{id}', 'UserController@user');

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@post');
Route::get('/posts/edit/{id}', 'PostsController@edit');
Route::post('/posts/edit/{id}', 'PostsController@editsave');
Route::post('/posts/create', 'PostsController@createsave');
Route::get('/posts/delete/{id}', 'PostsController@delete');

Auth::routes();

Route::get('/home', 'ProfileController@profile');
Route::get('logout', 'HomeController@logout');
