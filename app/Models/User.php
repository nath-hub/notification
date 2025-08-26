<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * @OA\Schema(
 *     schema="UpdateWebhookRequest",
 *     type="object",
 *     @OA\Property(
 *         property="url",
 *         type="string",
 *         format="uri",
 *         example="https://example.com/webhook/receive"
 *     ),
 *     @OA\Property(
 *         property="event_type",
 *         type="string",
 *         example="user.updated",
 *         description="Type d'événement pour le webhook"
 *     ),
 *     @OA\Property(
 *         property="secret",
 *         type="string",
 *         example="new-super-secret-key-123456",
 *         description="Clé secrète pour signer les webhooks"
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *         example=false,
 *         description="Statut actif/inactif du webhook"
 *     ),
 *     @OA\Property(
 *         property="max_attempts",
 *         type="integer",
 *         example=5,
 *         description="Nombre maximum de tentatives d'envoi"
 *     )
 * )
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @OA\Schema(
     *     schema="Error400",
     *     type="object",
     *     @OA\Property(property="message", type="string", example="Bad Request"),
     *     @OA\Property(property="errors", type="object", example={"field": {"Error message"}})
     * )
     */
    protected $guarded = [
        'id',
    ];

    /**
     * @OA\Schema(
     *     schema="Error401",
     *     type="object",
     *     @OA\Property(property="message", type="string", example="Unauthenticated")
     * )
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @OA\Schema(
     *     schema="Error403",
     *     type="object",
     *     @OA\Property(property="message", type="string", example="Forbidden")
     * )
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @OA\Schema(
     *     schema="Error422",
     *     type="object",
     *     @OA\Property(property="message", type="string", example="The given data was invalid."),
     *     @OA\Property(property="errors", type="object", example={"field": {"Validation error message"}})
     * )
     */
}
