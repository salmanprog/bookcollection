<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Libraries\VideoStream\VideoStream;

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
Route::get('play-video',function(){
    $stream = new VideoStream('FILE_PATH');
    return $stream->start();
})->name('play_video');

Route::get('video-stream',function(){
    return view('video-stream');
})->name('video_stream');

Route::get( 'encrypt-data', function(){
    return view('encrypt-data');
})->name('encrypt-data');

Route::get('deep-link',[HomeController::class,'deepLinking'])->name('deep_linking');
Route::get('customtable/sort-row',[HomeController::class,'customTableSort'])->name('custom_table_sort');
Route::get('braintree-dropin/{customer_id}',[HomeController::class,'braintreeDropIn'])->name('braintree-dropin');
Route::get('content/{slug}',[HomeController::class,'getContent'])->name('content');
Route::get('user/verify/{name}',[UserController::class,'verifyEmail'])->name('verifyEmail');
Route::match(['get','post'],'user/reset-password/{any}',[UserController::class,'resetPassword'])->name('reset-password');
// Route::get('{module?}/{action?}/{slug?}', function () {
//     return view('vite');
// });
Route::get('/', function(){
    return view('welcome');
})->name('home');
