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

Route::get('/', ['uses' => 'ReservationController@index', 'as' => 'reservation.index']);
Route::get('/listAvailable', ['uses' => 'ReservationConstroller@list', 'as' => 'reservation.list']);

Route::get('/test/{name}', 'CalculatorController@index');

ROute::get('/categories', 'CategoriesController@index');
Route::get('/cars/create', ['uses' => 'CarsController@create', 'as' => 'cars.create']);
Route::get('/cars', ['uses' => 'CarsController@list', 'as' => 'cars.list']);
Route::post('/cars', ['uses' => 'CarsController@save', 'as' => 'cars.save']);
