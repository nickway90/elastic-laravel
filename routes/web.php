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

Route::group(['prefix' => 'contact', 'namespace' => 'Contact'], function () {

    Route::post('/', 'ContactController@create');

    Route::get('/{id?}', 'ContactController@read');

    Route::put('/{id}', 'ContactController@update');

    Route::delete('/{id}', 'ContactController@destroy');

});

