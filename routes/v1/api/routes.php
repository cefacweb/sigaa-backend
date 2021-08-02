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

Route::group(['prefix' => '/v1'], function () {
    Route::post('auth/simpleauth/login', 'AccessControl\\SimpleAuthController@login')->name('auth.login');

    Route::group(['middleware' => 'auth:sanctum'], function () {
        // Route::apiResource('user', 'AccessControl\\UserController')->only(['index']);

        Route::get('auth/simpleauth/logout', 'AccessControl\\SimpleAuthController@logout')->name('auth.logout');
    });
});
