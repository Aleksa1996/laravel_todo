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

Route::get('/', 'PositionController@index');

Route::prefix('positions')->group(function () {
    Route::get('/', 'PositionController@index')->name('positions');
    Route::get('/save/{id?}', 'PositionController@show')->name('positions_show');
    Route::post('/save/{id?}', 'PositionController@save')->name('positions_save');
});
