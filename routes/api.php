<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiAuthorization;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
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
Route::middleware([ApiAuthorization::class])->group(function(){

    Route::post('user/login',[UserController::class,'login'])->name('api.login');
    Route::post('user/forgot-password',[UserController::class,'forgotPassword'])->name('api.forgot-password');
    Route::post('user/change-password',[UserController::class,'changePassword'])->name('api.change-password');
    Route::post('user/logout',[UserController::class,'userLogout'])->name('api.logout');
    Route::resource('user',UserController::class)->except(['delete']);
    Route::resource('category',CategoryController::class)->except(['delete']);
    
    Route::middleware(['custom_auth:api'])->group(function(){
        Route::resource('book',BookController::class);
        
    });
});
