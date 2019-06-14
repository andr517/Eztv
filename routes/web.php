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
Route::get('/teams/createTeam', 'TeamsController@createTeamView');
Route::post('/teams/createTeam', 'TeamsController@createTeamPost');
Route::get('/teams/editTeams/{id}', 'TeamsController@editTeamView');
Route::post('/teams/editTeams/{id}', 'TeamsController@editTeamSave');
Route::get('/teams/deleteTeams/{id}', 'TeamsController@deleteTeam');

Route::get('/teams/team/createPlayer/{id}', 'TeamsController@createPlayerView');
Route::post('/teams/team/createPlayer/{id}', 'TeamsController@createPlayerPost');
Route::get('/teams/team/editPlayers/{id}', 'TeamsController@editPlayersView');
Route::post('/teams/team/editPlayers/{id}', 'TeamsController@editPlayerSave');
Route::get('/teams/team/deletePlayers/{id}', 'TeamsController@deletePlayer');

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
