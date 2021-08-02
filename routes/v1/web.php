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

Route::get('/health', function () {
    return 'Healthy!';
})->name('healthcheck');

// Route::group(['namespace' => 'Laravel\\Sanctum\\Http\\Controllers'], function () {
//     Route::get('auth/simpleauth/csrf-cookie', 'CsrfCookieController@show');
// });