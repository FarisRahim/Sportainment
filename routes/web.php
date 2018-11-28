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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TaskController');
Route::get('add', 'TaskController@getAdd');
Route::post('postAdd', 'TaskController@postAdd');
Route::get('edit/{taskId?}', 'TaskController@getEdit');
Route::post('postEdit/{taskId?}', 'TaskController@postEdit');
Route::get('toggle/{taskId?}', 'TaskController@getToggle');

