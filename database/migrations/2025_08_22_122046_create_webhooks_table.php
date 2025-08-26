<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('webhooks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('private_key')->primary();
            $table->string('url'); // URL de destination du webhook
            $table->string('event_type'); // Type d'événement (ex: user.created, order.updated)
            $table->string('secret'); // Clé secrète pour signer les webhooks
            $table->boolean('is_active')->default(true); // Statut actif/inactif
            $table->integer('max_attempts')->default(3); // Nombre max de tentatives
            $table->timestamps();
            
            // Index pour les recherches par type d'événement
            $table->index('event_type');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhooks');
    }
};
