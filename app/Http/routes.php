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

Route::get('manage-vue', 'VueItemController@manageVue');

//Route::resource('vueitems','VueItemController');
Route::get('vueitems', 'VueItemController@index');
Route::post('vueitems', 'VueItemController@store');
Route::put('vueitems/{vueitems}', 'VueItemController@update');
Route::delete('vueitems/{vueitems}', 'VueItemController@destroy');
