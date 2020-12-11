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
Route::get('/home', function () {
    return view('adminlte/master');
});
// Route::get('/login', function () {
//     return view('user/login');
// });

// Route::get('/users/create', 'UserController@create');
// Route::post('/users', 'UserController@store');
// Route::get('/users', 'UserController@index');
// Route::get('/users/{userid}', 'UserController@show');
// Route::get('/users/{userid}/edit', 'UserController@edit');
// Route::put('/users/{userid}', 'UserController@update');
// Route::delete('/users/{userid}', 'UserController@destroy');

Route::resources([
    'users' => 'UserController',
]);
