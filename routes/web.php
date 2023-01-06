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

Route::group(['middleware' => 'auth'], function (){
    Route::controller(\App\Http\Controllers\MainController::class)->group(function (){
        Route::get('/', 'home')->name('home');
    });
});

Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
    Route::match(['get', 'post'], '/masuk', 'login')->name('login');
    Route::get('/keluar', 'logout')->name('logout');
});
