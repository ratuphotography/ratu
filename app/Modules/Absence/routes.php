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
Route::group(['prefix' => 'absence', 'namespace' => 'App\Modules\Absence\Controllers', 'middleware' => ['web','admin']], function () {
    Route::get('/', ['as' => 'absence.index', 'uses' => 'AbsenceController@index']);     
    Route::get('/getListAjax', ['as' => 'absence.getListAjax', 'uses' => 'AbsenceController@getListAjax']);
    Route::get('/create', ['as' => 'absence.create', 'uses' => 'AbsenceController@create']);     
    Route::get('/show/{id}', ['as' => 'absence.show', 'uses' => 'AbsenceController@show']);    
    Route::get('/preview/{id}', ['as' => 'absence.preview', 'uses' => 'AbsenceController@preview']);    
    Route::post('/store', ['as' => 'absence.store', 'uses' => 'AbsenceController@store']);
    Route::get('/edit/{id}', ['as' => 'absence.edit', 'uses' => 'AbsenceController@edit']);
    Route::put('/update/{id}', ['as' => 'absence.update', 'uses' => 'AbsenceController@update']);
    Route::delete('/delete/{id}', ['as' => 'absence.destroy', 'uses' => 'AbsenceController@destroy']);
});