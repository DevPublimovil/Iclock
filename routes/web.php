<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@getuser')->name('users.getuser');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
    Route::put('/users/{id}', 'UserController@update')->name('users.update');
    Route::get('/users/firma/{id}', 'UserController@getfirma')->name('users.getfirma');
    Route::put('/users/updatefirma/{id}', 'UserController@updatefirma')->name('users.updatefirma');
    Route::resource('/empleados', 'EmpleadosController');
    Route::get('/getempleados', 'EmpleadosController@getEmpleados')->name('empleados.getempleados');
    Route::resource('/acciones', 'AccionesController');
    Route::get('/getactions', 'AccionesController@getactions')->name('actions.getactions');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
