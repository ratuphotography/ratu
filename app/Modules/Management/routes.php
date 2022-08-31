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

Route::group(['prefix' => 'management', 'namespace' => 'App\Modules\Management\Controllers', 'middleware' => ['web']], function () {
    Route::get('/', ['as' => 'management.index', 'uses' => 'ManagementController@index']);
    Route::get('/account', ['as' => 'management.account', 'uses' => 'ManagementController@account']);


    Route::get('/absence', ['as' => 'management.absence', 'uses' => 'ManagementController@absence']);
    Route::get('/list_absence', ['as' => 'management.list_absence', 'uses' => 'ManagementController@list_absence']);
    Route::get('/list_absence_category', ['as' => 'management.list_absence_category', 'uses' => 'ManagementController@list_absence_category']);
    Route::get('/list_absence_regulation', ['as' => 'management.list_absence_regulation', 'uses' => 'ManagementController@list_absence_regulation']);
    Route::get('/list_absence_team', ['as' => 'management.list_absence_team', 'uses' => 'ManagementController@list_absence_team']);

    Route::get('/value', ['as' => 'management.value', 'uses' => 'ManagementController@value']);
    Route::get('/list_value_category', ['as' => 'management.list_value_category', 'uses' => 'ManagementController@list_value_category']);
    Route::get('/list_value_transaction', ['as' => 'management.list_value_transaction', 'uses' => 'ManagementController@list_value_transaction']);
    Route::get('/list_value', ['as' => 'management.list_value', 'uses' => 'ManagementController@list_value']);

    Route::get('/team', ['as' => 'management.team', 'uses' => 'ManagementController@team']);
     
    
});
