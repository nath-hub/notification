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
        Schema::create('notifications', function (Blueprint $table) { 
            $table->string('user_id'); // UUID pour correspondre à votre structure
            
            // Type de notification
            $table->string('type');  
            $table->string('subject');
            $table->text('content')->nullable(); 
            $table->string('language', 10)->default('fr'); 
            $table->enum('status', ['pending', 'sent', 'failed', 'read'])->default('pending');
             
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('read_at')->nullable(); 
            $table->text('error_message')->nullable(); 
            $table->json('metadata')->nullable();
            
            $table->timestamps();
            
            // Index pour les performances
            $table->index('user_id');
            $table->index('type');
            $table->index('status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
