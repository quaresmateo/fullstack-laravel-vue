<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Tasks routes */
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{id}', 'TaskController@show');
Route::put('/tasks/{id}', 'TaskController@update');
Route::delete('/tasks/{id}', 'TaskController@destroy');
Route::post('/tasks', 'TaskController@store');

/* Types routes */
Route::get('/types', 'TypeController@index');
Route::get('/types/{id}', 'TypeController@show');
Route::put('/types/{id}', 'TypeController@update');
Route::put('/types/{id}', 'TypeController@update');
Route::delete('/types/{id}', 'TypeController@destroy');
Route::post('/types', 'TypeController@store');
