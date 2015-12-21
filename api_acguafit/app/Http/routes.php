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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => '/api'], function(){

Route::get('/', ['as' => 'index', 'uses' => 'ApiController@index']); 
Route::post('/gravaTreino', ['as' => 'index', 'uses' => 'ApiController@putTreino']); 
Route::get('/mensagens', ['as' => 'index', 'uses' => 'ApiController@mensagens']); 



});