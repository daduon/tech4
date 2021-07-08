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

Route::middleware('auth:api')->group(function () {
    Route::prefix('students')->group(function (){
        Route::get('access','StudentController@show');
    });
});

Route::group( ['middleware' => ['auth:student','scope:student'] ],function(){
    // authenticated customer routes here
    Route::post('dashboard','CustomerController@dashboard');
});

Route::prefix('students')->group(function (){
    Route::name('api.')->group(function () {
        Auth::routes();
    });
});

