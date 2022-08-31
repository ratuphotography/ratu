<?php

use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => 'value', 'namespace' => 'App\Modules\Value\Controllers', 'middleware' => ['web','admin']], function () {
    Route::get('/', ['as' => 'value.index', 'uses' => 'ValueController@index']);     
    Route::get('/getListAjax', ['as' => 'value.getListAjax', 'uses' => 'ValueController@getListAjax']);
    Route::get('/create', ['as' => 'value.create', 'uses' => 'ValueController@create']);     
    Route::get('/show/{id}', ['as' => 'value.show', 'uses' => 'ValueController@show']);    
    Route::get('/preview/{id}', ['as' => 'value.preview', 'uses' => 'ValueController@preview']);    
    Route::post('/store', ['as' => 'value.store', 'uses' => 'ValueController@store']);
    Route::get('/edit/{id}', ['as' => 'value.edit', 'uses' => 'ValueController@edit']);
    Route::put('/update/{id}', ['as' => 'value.update', 'uses' => 'ValueController@update']);
    Route::delete('/delete/{id}', ['as' => 'value.destroy', 'uses' => 'ValueController@destroy']);
});