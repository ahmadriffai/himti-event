<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Event Route
 */
Route::get('event/list', 'EventController@list')->name('event.list');
Route::get('event/cari', 'EventController@cari')->name('event.cari');
Route::get('event/{id}', 'EventController@detail')->name('event.cari');
