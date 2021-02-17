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
Route::post('v1/access/token', 'MpesaController@generateAccessToken');
Route::post('v1/tawala/stk/push', 'MpesaController@customerMpesaSTKPush')->name('m');
Route::get('get_cities', 'APIController@getCities');
Route::get('get_locations', 'APIController@getLocations');
Route::post('v1/tawala/validation', 'MpesaController@mpesaValidation');
Route::post('v1/tawala/transaction/confirmation', 'MpesaController@mpesaConfirmation');
Route::post('v1/tawala/register/url', 'MpesaController@mpesaRegisterUrls');
