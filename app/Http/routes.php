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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'ByDefault\IndexController@index');
Route::get('item', 'Item\ItemController@index');
Route::get('item/{id}', 'Item\ItemController@show')
        ->where('id', '[0-9]+');

