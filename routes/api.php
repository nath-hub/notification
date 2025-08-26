<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\WebhookController;
use App\Mail\UserRegistered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('webhooks', WebhookController::class);
Route::post('webhooks/trigger', [WebhookController::class, 'triggerWebhook']);

Route::post('/webhook/receive', [WebhookController::class, 'receiveWebhook'])
    // ->middleware(['webhook.verify'])
    ->name('webhook.receive');


Route::post('/notifications/welcome', [NotificationController::class, 'sendWelcomeEmail']);
Route::post('/notifications/password-reset', [NotificationController::class, 'sendPasswordResetEmail']);
Route::get('/notifications/{userId}', [NotificationController::class, 'getUserNotifications']);

Route::post('/send-verification-code', [NotificationController::class, 'sendVerificationCode']);
Route::post('/send-password-reset-success', [NotificationController::class, 'sendPasswordResetSuccess']);

Route::post('/send-account-verified-success', [NotificationController::class, 'sendAccountVerifiedSuccess']);

Route::get('/mail', function() {
     $user = User::first();
     $data = [];
     Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new UserRegistered($user, $data));
});

Route::prefix('payment-notifications')->group(function () {
    Route::post('/success', [NotificationController::class, 'sendPaymentSuccess']);
    Route::post('/failed', [NotificationController::class, 'sendPaymentFailed']);
    Route::post('/refund', [NotificationController::class, 'sendPaymentRefund']);
    Route::post('/pending', [NotificationController::class, 'sendPaymentPending']);
    Route::post('/receipt', [NotificationController::class, 'sendPaymentReceipt']);
    Route::get('/history/{userId}', [NotificationController::class, 'getPaymentNotifications']);
});