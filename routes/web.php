<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login', [\App\Http\Controllers\Auth\AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('login');
Route::post('/logout', [\App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::resource('categories', App\Http\Controllers\CategoryController::class);


    Route::resource('products', App\Http\Controllers\ProductController::class);

    Route::get('users/rest/{id}','App\Http\Controllers\UserController@rest')->name('users.rest');

    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


