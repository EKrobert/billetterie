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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number', 50)->unique(); // Numéro de la commande (order_number)
            $table->foreignId('event_id')->constrained('events'); // Clé étrangère vers la table events (order_event_id)
            $table->mediumInteger('price'); // Prix total de la commande (order_price)
            $table->string('type', 50); // Type de la commande (order_type)
            $table->string('payment_method', 100); // Mode de paiement de la commande (order_payment)
            $table->text('additional_info')->nullable(); // Informations supplémentaires sur la commande (order_info)
            $table->timestamp('created')->useCurrent(); // Date de création de la commande (order_created_on)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
