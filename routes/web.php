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
Route::get('/users', 'UserController@index');                           // Listar vista index
Route::get('/users/{id}/show', 'UserController@show');                  // Carga Vista Show con su respectivo ID 
Route::post('/users/{id}/update','UserController@update');              // Actualiza los datos del Respectivo ID
Route::get('/users/create', 'UserController@create');                   // Carga Vista Create User
Route::post('/users/store', 'UserController@store');                    // Almacena el nuevo registro de User
Route::get('/users/{id}/edit', 'UserController@edit');