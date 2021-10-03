<?php

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

Route::group(['prefix' => '/v1', 'as' => 'api.'], function () {
    Route::post('auth/simpleauth/login', 'API\\AccessControl\\SimpleAuthController@login')->name('auth.login');

    Route::group(['middleware' => 'auth:sanctum'], function () {
        // Auth
        Route::get('auth/simpleauth/logout', 'API\\AccessControl\\SimpleAuthController@logout')->name('auth.logout');

        // User
        Route::apiResource('user', 'API\\AccessControl\\UserController')->only(['index']);
        Route::group(['prefix' => '/user', 'as' => 'user.'], function () {
            Route::apiResource('permissions', 'API\\AccessControl\\UserPermissionsController')->only(['index']);
        });

        // Charges
        Route::apiResource('charges', 'API\\Payment\\ChargesController');
    });
});
