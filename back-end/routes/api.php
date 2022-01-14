<?php

use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\UserController;
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

Route::namespace('')->group(function () {
    //players route
    Route::prefix('players')->group(function () {
        Route::get('/', [PlayerController::class, 'index']);
        Route::get('/{id}', [PlayerController::class, 'show']);
        Route::post('/', [PlayerController::class, 'save'])->middleware('auth.basic');
        Route::put('/', [PlayerController::class, 'update']);
        Route::patch('/', [PlayerController::class, 'update']);
        Route::delete('/{id}', [PlayerController::class, 'delete']);
    });

    Route::resource('/users', UserController::class);
});
