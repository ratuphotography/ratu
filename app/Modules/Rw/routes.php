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
Route::group(['prefix' => 'rw', 'namespace' => 'App\Modules\Rw\Controllers', 'middleware' => ['web']], function () {
    Route::get('/', ['as' => 'rw.index', 'uses' => 'RwController@index']);
    Route::get('/getListAjax', ['as' => 'rw.getListAjax', 'uses' => 'RwController@getListAjax']);
    Route::get('/create', ['as' => 'rw.create', 'uses' => 'RwController@create']);
    Route::get('/show/{id}', ['as' => 'rw.show', 'uses' => 'RwController@show']);    
    Route::get('/preview/{id}', ['as' => 'rw.preview', 'uses' => 'RwController@preview']);    
    Route::post('/store', ['as' => 'rw.store', 'uses' => 'RwController@store']);
    Route::get('/edit/{id}', ['as' => 'rw.edit', 'uses' => 'RwController@edit']);
    Route::put('/update/{id}', ['as' => 'rw.update', 'uses' => 'RwController@update']);
    Route::delete('/delete/{id}', ['as' => 'rw.destroy', 'uses' => 'RwController@destroy']);
});