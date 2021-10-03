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
    Route::group(['middleware' => ['auth:sanctum', 'can:admin']], function () {
        Route::apiResource('users', 'Admin\\AccessControl\\UsersController')->only(['index']);
        Route::apiResource('roles', 'Admin\\AccessControl\\RolesController');
        Route::apiResource('permissions', 'Admin\\AccessControl\\PermissionsController')->only(['index']);

        Route::name('roles')->apiResource('roles/{role}/permissions', 'Admin\\AccessControl\\RolesPermissionsController')->only(['index', 'store', 'destroy']);
        Route::name('users')->apiResource('user/{user}/roles', 'Admin\\AccessControl\\UserRolesController')->only(['index', 'store', 'destroy']);
    });
});
