<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function(){
    return 'pong';
});

Route::group(['prefix' => 'auth'], function(){
    Route::post('/reset/confirm-email',   [ForgotPasswordController::class, 'forgot']);
    Route::post('/reset/confirm-password',[ResetPasswordController::class,  'reset']);
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/auth/load-session',  [LoginController::class, 'loadSession']);

    Route::get('/states',        [StateController::class, 'states']);
    Route::get('/states-select', [StateController::class, 'select2States']);

    Route::get('/cities-by-state/{state_id}', [CityController::class, 'citiesByState']);

    Route::group(['prefix' => 'user'], function(){
        Route::put('/profile', [UserController::class, 'profile']);
        Route::post('/photo', [UserController::class, 'photo']);
    });
});
