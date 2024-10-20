<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiAuthorization;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\UserCardController;
use App\Http\Controllers\Api\PayoutController;

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

    Route::post('video/thumbnail',[GeneralController::class,'videoThumbnail'])->name('video-thumbnail');

    Route::post('user/login',[UserController::class,'login'])->name('api.login');
    Route::post('user/forgot-password',[UserController::class,'forgotPassword'])->name('api.forgot-password');
    Route::post('user/change-password',[UserController::class,'changePassword'])->name('api.change-password');
    Route::post('user/logout',[UserController::class,'userLogout'])->name('api.logout');
    Route::post('user/social-login',[UserController::class,'socialLogin'])->name('api.social-login');
    Route::post('user/verify-code',[UserController::class,'verifyCode'])->name('api.verify-code');
    Route::post('user/resend-code',[UserController::class,'resendCode'])->name('api.resend-code');
    Route::resource('user',UserController::class)->except(['delete']);

    Route::resource('faq',FaqController::class)->only('index');

    Route::middleware(['custom_auth:api'])->group(function(){

        Route::resource('gateway/card',UserCardController::class);

        Route::post('connect/onboard',[PayoutController::class,'connectOnBoard'])->name('api.connect-onboard');
        Route::get('payout/external-account',[PayoutController::class,'getExternalAccount'])->name('api.connect-external-account');
        Route::post('payout/external-account',[PayoutController::class,'addExternalAccount'])->name('api.connect-external-account');
        Route::get('payout/check-status',[PayoutController::class,'checkAccountStatus'])->name('api.check-account-status');
        Route::post('payout/personal-info',[PayoutController::class,'savePersonalInfo'])->name('api.connect-personal-info');
        Route::get('payout/personal-info',[PayoutController::class,'getPersonalInfo'])->name('api.connect-personal-info');

        Route::get('notification',[NotificationController::class,'index'])->name('api.notification');
        Route::put('notification/{any}',[NotificationController::class,'update'])->name('api.notification');
        Route::post('notification/send',[NotificationController::class,'sendNotification'])->name('api.send-notification');
        Route::post('notification/setting',[NotificationController::class,'saveNotificationSetting'])->name('api.notification-setting');
        Route::get('notification/setting',[NotificationController::class,'getNotificationSetting'])->name('api.notification-setting');

    });
});
