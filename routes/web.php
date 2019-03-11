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
//Route::get('/tasks/new','TaskController@create');
Route::get('/tasks','TaskController@index');
Route::post('/tasks','TaskController@store');
Route::get('/tasks/create','TaskController@create');
Route::get('/tasks/{task}','TaskController@show');
Route::post('/tasks/{task}/details','DetailController@store');
// Route::patch('/tasks/{task}','TaskController@update');
// Route::delete('/tasks/{task}','TaskController@destroy');