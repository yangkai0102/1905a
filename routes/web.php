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

Route::get('admin/index', 'Admin\CsdController@index');
Route::get('admin/csd/create', 'Admin\CsdController@create');
Route::get('admin/csd/lists', 'Admin\CsdController@lists');
Route::post('admin/csd/store', 'Admin\CsdController@store');
Route::get('admin/csd/edit/{id}', 'Admin\CsdController@edit');
Route::get('admin/csd/destroy/{id}', 'Admin\CsdController@destroy');
Route::post('admin/csd/update/{id}', 'Admin\CsdController@update');








