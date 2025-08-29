<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\NotificationService;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }


    /**
     * @OA\Post(
     *     path="/api/notifications/welcome",
     *     summary="Envoyer un email de bienvenue",
     *     tags={"Notifications"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"user_id", "email", "name", "language"},
     *             @OA\Property(property="user_id", type="string", example="550e8400-e29b-41d4-a716-446655440000"),
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="language", type="string", example="fr", enum={"fr", "en"}),
     *             @OA\Property(property="additional_data", type="object", example={})
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Email envoyé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Welcome email sent successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur lors de l'envoi de l'email"
     *     )
     * )
     */
    public function sendWelcomeEmail(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        // Créer un user factice pour l'envoi d'email
        $user = User::on($connection)->find($request->id);

        $success = $this->notificationService->sendWelcomeEmail($user);

        if ($success) {
            return response()->json(['message' => 'Welcome email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send welcome email'], 500);
    }


    /**
     * @OA\Post(
     *     path="/api/notifications/password-reset",
     *     summary="Envoyer un email de réinitialisation de mot de passe",
     *     tags={"Notifications"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"user_id", "email", "name", "language", "reset_token"},
     *             @OA\Property(property="user_id", type="string", example="550e8400-e29b-41d4-a716-446655440000"),
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="language", type="string", example="fr", enum={"fr", "en"}),
     *             @OA\Property(property="reset_token", type="string", example="abc123def456")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Email envoyé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Password reset email sent successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur lors de l'envoi de l'email"
     *     )
     * )
     */
    public function sendPasswordResetEmail(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['id']);

        $success = $this->notificationService->sendPasswordResetEmail($user);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send password reset email'], 500);
    }



    /**
     * Envoyer le code de vérification email
     */
    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        // Créer un user factice pour l'envoi d'email
        $user = User::on($connection)->find($request->id);

        // Envoyer l'email de vérification
        $success = $this->notificationService->sendEmailVerification($user);

        if ($success) {
            return response()->json([
                'message' => 'Code de vérification envoyé',
                'expires_at' => $user
            ]);
        }

        return response()->json([
            'message' => 'Erreur lors de l\'envoi du code'
        ], 500);
    }

    /**
     * Envoyer l'email de confirmation de réinitialisation
     */
    public function sendPasswordResetSuccess(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['id']);

        // Envoyer l'email de confirmation
        $success = $this->notificationService->sendPasswordResetSuccess($user);

        if ($success) {
            return response()->json([
                'message' => 'Email de confirmation envoyé'
            ]);
        }

        return response()->json([
            'message' => 'Erreur lors de l\'envoi de l\'email de confirmation'
        ], 500);
    }

    public function sendAccountVerifiedSuccess(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['id']);

        // Envoyer l'email de confirmation de vérification
        $success = $this->notificationService->sendAccountVerifiedSuccess($user);

        if ($success) {
            return response()->json([
                'message' => 'Email de confirmation envoyé avec succès',
                'timestamp' => now()->toISOString()
            ]);
        }

        return response()->json([
            'message' => 'Erreur lors de l\'envoi de l\'email de confirmation'
        ], 500);
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////payments

    /**
     * Envoyer une notification de paiement réussi
     */
    public function sendPaymentSuccess(Request $request, $transactionData): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['user_id']);

        $success = $this->notificationService->sendPaymentSuccess($user, $transactionData);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send password reset email'], 500);

    }

    /**
     * Envoyer une notification d'échec de paiement
     */
    public function sendPaymentFailed(Request $request, $transactionData): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['user_id']);

        $success = $this->notificationService->sendPaymentFailed($user, $transactionData);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send password reset email'], 500);

    }

    /**
     * Envoyer une notification de remboursement
     */
    public function sendPaymentRefund(Request $request, $transactionData): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['user_id']);

        $success = $this->notificationService->sendPaymentRefund($user, $transactionData);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send password reset email'], 500);

    }

    /**
     * Envoyer une notification de paiement en attente
     */
    public function sendPaymentPending(Request $request, $transactionData): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['user_id']);

        $success = $this->notificationService->sendPaymentPending($user, $transactionData);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }

        return response()->json(['message' => 'Failed to send password reset email'], 500);

    }

    /**
     * Envoyer un reçu de transaction
     */
    public function sendPaymentReceipt(Request $request, $transactionData): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'environment' => 'required|string|in:prod,sandbox',
        ]);

        if ($request->environment === 'sandbox') {
            $connection = 'mysql_sandbox';
        } else {
            $connection = 'mysql_prod';
        }

        $user = User::on($connection)->find($validated['user_id']);

        $success = $this->notificationService->sendPaymentReceipt($user, $transactionData);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }
        return response()->json(['message' => 'Failed to send password reset email'], 500);
    }

    ////////////////////////////////////////////////////////////////entreprise//////////////////////////////////////////////

    public function MerchantWelcome(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'data' => 'required|string'
        ]);

        $user = User::on('mysql_sandbox')->find($validated['id']);

        if(!$user){
            $user = User::on('mysql_prod')->find($validated['id']);
        }

        $data = $request->data;

        $success = $this->notificationService->MerchantWelcome($user, $data);

        if ($success) {
            return response()->json(['message' => 'Password reset email sent successfully']);
        }
        return response()->json(['message' => 'Failed to send password reset email'], 500);
    }

}
