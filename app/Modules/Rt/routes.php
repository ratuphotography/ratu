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
Route::group(['prefix' => 'rt', 'namespace' => 'App\Modules\Rt\Controllers', 'middleware' => ['web','admin']], function () {
    Route::get('/', ['as' => 'rt.index', 'uses' => 'RtController@index']);
    Route::get('/getListAjax', ['as' => 'rt.getListAjax', 'uses' => 'RtController@getListAjax']);
    Route::get('/create', ['as' => 'rt.create', 'uses' => 'RtController@create']);
    Route::get('/show/{id}', ['as' => 'rt.show', 'uses' => 'RtController@show']);    
    Route::get('/preview/{id}', ['as' => 'rt.preview', 'uses' => 'RtController@preview']);    
    Route::post('/store', ['as' => 'rt.store', 'uses' => 'RtController@store']);
    Route::get('/edit/{id}', ['as' => 'rt.edit', 'uses' => 'RtController@edit']);
    Route::put('/update/{id}', ['as' => 'rt.update', 'uses' => 'RtController@update']);
    Route::delete('/delete/{id}', ['as' => 'rt.destroy', 'uses' => 'RtController@destroy']);
});