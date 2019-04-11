<?php

use Illuminate\Http\Request;

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
//Route::group(['namespace' => 'Api', 'prefix' => 'events'], function () {
//    // Create new event
//    Route::post('addEvent', 'EventController@addEvent');
//    // Edit event
//    Route::put('editEvent/{eventId}', 'EventController@editEvent');
//    // Search event
//    Route::get('searchEvents/{timeStart}/{timeEnd}/{event_date}', 'EventController@searchEvents');
//});
