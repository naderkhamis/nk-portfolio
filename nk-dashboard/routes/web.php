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


Route::prefix('career')->group(function () {
    Route::get('create', 'CareerController@create')->name('createCareer');
    Route::post('store', 'CareerController@store')->name('storeCareer');
    Route::get('index', 'CareerController@index')->name('careerIndex');
    Route::get('show/{id}', 'CareerController@show')->name('showCareer');
    Route::get('edit/{id}', 'CareerController@edit')->name('editCareer');
    Route::post('update', 'CareerController@update')->name('updateCareer');
    Route::get('delete/{id}', 'CareerController@destroy')->name('deleteCareer');
});