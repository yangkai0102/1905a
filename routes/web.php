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

Route::get('/login', 'Admin\LoginController@login');
Route::post('/login/loginDo', 'Admin\LoginController@loginDo');

Route::get('/admin/index','Admin\AdminController@index');

Route::get('/admin/create','Admin\AdminController@create');
Route::post('/admin/store','Admin\AdminController@store');
Route::get('/admin/lists','Admin\AdminController@lists');

Route::get('/goods/create','Admin\GoodsController@create');
Route::post('/goods/store','Admin\GoodsController@store');






