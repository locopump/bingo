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

Route::group(['prefix' => 'game', 'namespace' => 'API'], function () {
    Route::get('/{id?}', 'GameController@getGame');
    Route::post('/', 'GameController@createGame');
});
Route::group(['prefix' => 'card_structure', 'namespace' => 'API'], function () {
    Route::get('/', 'CardStructureController@getStructure');
});
Route::group(['prefix' => 'game_cards', 'namespace' => 'API'], function () {
    Route::post('/', 'GameCardsController@createGameCards');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
