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

###################################### INDEX-HOME ROUTES ######################################
Route::group(['name', 'home'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
});
###################################### /INDEX-HOME ROUTES ######################################

###################################### CAREER CONTROLLER ROUTES ######################################
Route::prefix('career')->middleware('auth')->group(function () {
    Route::get('create', 'CareerController@create')->name('createCareer');
    Route::post('store', 'CareerController@store')->name('storeCareer');
    Route::get('index', 'CareerController@index')->name('careerIndex');
    Route::get('show/{id}', 'CareerController@show')->name('showCareer');
    Route::get('edit/{id}', 'CareerController@edit')->name('editCareer');
    Route::post('update', 'CareerController@update')->name('updateCareer');
    Route::get('delete/{id}', 'CareerController@destroy')->name('deleteCareer');
});
###################################### /CAREER CONTROLLER ROUTES ######################################

Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
