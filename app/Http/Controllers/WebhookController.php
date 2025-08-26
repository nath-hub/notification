<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\WebhookService;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Webhook",
 *     type="object",
 *     title="Webhook",
 *     @OA\Property(property="id", type="string", example="550e8400-e29b-41d4-a716-446655440000"),
 *     @OA\Property(property="url", type="string", example="https://example.com/webhook"),
 *     @OA\Property(property="event_type", type="string", example="user.created"),
 *     @OA\Property(property="secret", type="string", example="super-secret-key-123"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="max_attempts", type="integer", example=3),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2023-12-07T10:30:00.000000Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2023-12-07T10:30:00.000000Z")
 * )
 */


class WebhookController extends Controller
{
    protected $webhookService;

    public function __construct(WebhookService $webhookService)
    {
        $this->webhookService = $webhookService;
    }



    /**
     * @OA\Post(
     *     path="/api/webhooks/trigger/{eventType}",
     *     summary="Déclencher un webhook",
     *     tags={"Webhooks"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="eventType",
     *         in="path",
     *         required=true,
     *         description="Type d'événement à déclencher",
     *         @OA\Schema(type="string", example="user.created")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Webhook déclenché avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Webhook dispatched"),
     *             @OA\Property(property="event_type", type="string", example="user.created"),
     *             @OA\Property(
     *                 property="payload",
     *                 type="object",
     *                 example={
     *                     "event": "user.created",
     *                     "timestamp": "2023-12-07T10:30:00.000000Z",
     *                     "data": {
     *                         "message": "Webhook triggered successfully",
     *                         "id": "655f7a8b1a2b3"
     *                     }
     *                 }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Type d'événement invalide",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Invalid event type")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non authentifié",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Accès non autorisé",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Forbidden")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Aucun webhook trouvé pour cet événement",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="No webhooks found for this event type")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur serveur interne",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Internal Server Error")
     *         )
     *     )
     * )
     */
    public function triggerWebhook(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'payload' => 'required|array',
            'private_key' => 'required|string'
        ]);

        $result = $this->webhookService->sendWebhook(
            $request->url,
            $request->payload,
            $request->private_key
        );

        return response()->json($result);
    }


}
