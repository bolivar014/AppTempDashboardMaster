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

// Rutas de Autenticación
Auth::routes();

// Rutas Home
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');

// Rutas Users
Route::get('/users', 'UserController@index');
Route::get('/users/{id}/show', 'UserController@show');