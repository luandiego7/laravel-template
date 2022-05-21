<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::get('/ping', function(){
    return 'pong';
});

Route::group(['prefix' => 'auth'], function(){
    Route::post('/register', [RegisterController::class, 'create']);
    Route::post('/login',    [LoginController::class, 'login']);
    Route::get ('/logout',   [LoginController::class, 'logout'])->middleware('auth:sanctum');
});
