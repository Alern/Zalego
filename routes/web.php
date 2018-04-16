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
Route::get('edit', function () {
    return view('editUser');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('editUser/{id}','userController@Edit');
Route::post('updateUser','userController@update');
Route::get('viewUsers', 'userController@showUsers');
Route::post('delete', 'userController@delete');
