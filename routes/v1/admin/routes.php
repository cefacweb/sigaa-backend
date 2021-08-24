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

Route::group(['prefix' => '/v1', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::apiResource('users', 'AccessControl\\UsersController')->only(['index']);
        Route::apiResource('roles', 'AccessControl\\RolesController');
        Route::apiResource('permissions', 'AccessControl\\PermissionsController')->only(['index']);

        Route::name('roles')->apiResource('roles/{role}/permissions', 'AccessControl\\RolesPermissionsController')->only(['index', 'store', 'destroy']);
        Route::name('users')->apiResource('user/{user}/roles', 'AccessControl\\UserRolesController')->only(['index', 'store', 'destroy']);
    });
});
