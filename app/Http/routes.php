<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@article');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('article','HomeController@article');
Route::get('edit_user','UsersController@edit');
Route::get('consult_user','UsersController@consult');
Route::get('article', 'CommentController@getInfos');
Route::post('article', 
  ['as' => 'article_store', 'uses' => 'CommentController@postInfos']);
Route::post('edit_user', array('uses' => 'UsersController@edit'));
Route::post('edit_Complete', array('uses' => 'UsersController@editComplete'));
