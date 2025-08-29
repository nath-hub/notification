<?php

namespace App\Http\Services;

use App\Mail\AccountVerifiedSuccess;
use App\Mail\EmailPasswordResetSuccess;
use App\Mail\EmailVerification;
use App\Mail\MerchantWelcome;
use App\Mail\PasswordReset;
use App\Mail\PaymentFailed;
use App\Mail\PaymentPending;
use App\Mail\PaymentReceipt;
use App\Mail\PaymentRefund;
use App\Mail\PaymentSuccess;
use App\Mail\UserRegistered;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class NotificationService
{
    public function sendWelcomeEmail(User $user)
    {
        // try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new UserRegistered($user));

            return true;

        // } catch (\Exception $e) {
        //     Log::error('Welcome email failed: ' . $e->getMessage());
        //     return false;
        // }
    }

    public function sendPasswordResetEmail(User $user)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PasswordReset($user, $user->verification_code));


            return true;

        } catch (\Exception $e) {

            return false;
        }
    }


    public function sendEmailVerification($user)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new EmailVerification($user, $user->verification_code));

            return true;

        } catch (\Exception $e) {

            return false;
        }
    }


    public function sendPasswordResetSuccess(User $user)
    {
        try {

            $dateTimeString = $user->updated_at;

            $dateTime = Carbon::parse($dateTimeString);

            $date = $dateTime->toDateString();

            $time = $dateTime->toTimeString();

            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new EmailPasswordResetSuccess($user, $date, $time));

            return true;

        } catch (\Exception $e) {


            return false;
        }
    }


    public function sendAccountVerifiedSuccess(User $user)
    {

        $dateTimeString = $user->email_verified_at;

        $dateTime = Carbon::parse($dateTimeString);

        $date = $dateTime->toDateString();

        $time = $dateTime->toTimeString();

        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new AccountVerifiedSuccess($user, $date, $time));

            return true;

        } catch (\Exception $e) {
            return false;
        }
    }


    public function sendPaymentSuccess($user, $transactionData)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PaymentSuccess($user, $transactionData));

            return true;

        } catch (\Exception $e) {

            return false;
        }

    }

    public function sendPaymentFailed($user, $transactionData)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PaymentFailed($user, $transactionData));

            return true;

        } catch (\Exception $e) {

            return false;
        }

    }

    public function sendPaymentRefund($user, $transactionData)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PaymentRefund($user, $transactionData));

            return true;

        } catch (\Exception $e) {

            return false;
        }

    }

    public function sendPaymentPending($user, $transactionData)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PaymentPending($user, $transactionData));

            return true;

        } catch (\Exception $e) {

            return false;
        }

    }

    public function sendPaymentReceipt($user, $transactionData)
    {
        try {
            Mail::to($user->email)
                ->locale($user->language ?? 'fr')
                ->send(new PaymentReceipt($user, $transactionData));

            return true;

        } catch (\Exception $e) {

            return false;
        }

    }

    public function merchantWelcome($merchant, $transactionData)
    {
        try {
            Mail::to($merchant['email'])
                ->locale($merchant['language'] ?? 'fr')
                ->send(new MerchantWelcome($transactionData, $merchant));

            return true;

        } catch (\Exception $e) {

            return false;
        }
    }
}
