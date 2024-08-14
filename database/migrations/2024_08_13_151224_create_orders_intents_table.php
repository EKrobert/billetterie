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
        Schema::create('orders_intents', function (Blueprint $table) {
            $table->id();// Identifiant unique de l’intention de commande (order_intent_id)
            $table->mediumInteger('price'); // Prix total de l’intention de commande (order_intent_price)
            $table->string('type', 50); // Type de l’intention de commande (order_intent_type)
            $table->string('user_email', 100); // Email de l’utilisateur
            $table->string('user_phone', 20); // Téléphone de l’utilisateur
            $table->dateTime('expiration_date'); // Date d’expiration de l’intention de commande
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_intents');
    }
};
