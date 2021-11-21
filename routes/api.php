<?php

use App\Http\Controllers\DeskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::group(['middleware' => 'auth:api'], function () {
        Route::apiResources([
            'desks' => DeskController::class,
            'users' => UserController::class
        ]);
    });
    Route::get('/desks/count', [DeskController::class, 'count'])->name('desks.count');

});

//Route::get('/desks/count', [DeskController::class, 'count'])->name('desks.count');
//Route::apiResources([
//    'users' => UserController::class
//]);
