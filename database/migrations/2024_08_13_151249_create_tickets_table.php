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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events'); // Clé étrangère vers la table events (ticket_event_id)
            $table->string('email', 255); // Email du détenteur du ticket (ticket_email)
            $table->string('phone', 20); // Téléphone du détenteur du ticket (ticket_phone)
            $table->mediumInteger('price'); // Prix du ticket (ticket_price)
            $table->foreignId('order_id')->constrained('orders'); // Clé étrangère vers la table orders (ticket_order_id)
            $table->string('key', 100); // Clé unique du ticket (ticket_key)
            $table->foreignId('ticket_type_id')->constrained('ticket_types'); // Clé étrangère vers la table ticket_types (ticket_ticket_type_id)
            $table->enum('status', ['active', 'validated', 'expired', 'cancelled']); // Statut du ticket (ticket_status)
            $table->timestamp('created')->useCurrent(); // Date de création du ticket (ticket_created_on)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
