<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @OA\Schema(
 *     schema="StoreWebhookRequest",
 *     type="object",
 *     required={"url", "event_type", "secret"},
 *     @OA\Property(
 *         property="url",
 *         type="string",
 *         format="uri",
 *         example="https://example.com/webhook/receive"
 *     ),
 *     @OA\Property(
 *         property="event_type",
 *         type="string",
 *         example="user.created",
 *         description="Type d'événement pour le webhook"
 *     ),
 *     @OA\Property(
 *         property="secret",
 *         type="string",
 *         example="super-secret-key-123456",
 *         description="Clé secrète pour signer les webhooks (min 16 caractères)"
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *         example=true,
 *         description="Statut actif/inactif du webhook"
 *     ),
 *     @OA\Property(
 *         property="max_attempts",
 *         type="integer",
 *         example=3,
 *         description="Nombre maximum de tentatives d'envoi"
 *     )
 * )
 */


class Webhook extends Model
{

    use HasFactory;

    protected $casts = [
        'is_active' => 'boolean',
    ];

    
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [
        'id'
    ];

     protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }
}
