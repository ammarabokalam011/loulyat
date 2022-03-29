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

Route::post('/signin', [App\Http\Controllers\API\AuthenticationController::class, 'signin']);
//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::post('/sign-out', [App\Http\Controllers\API\AuthenticationController::class, 'logout']);
    Route::resource('users', App\Http\Controllers\API\UserAPIController::class);


    Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);
    Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class);
});



