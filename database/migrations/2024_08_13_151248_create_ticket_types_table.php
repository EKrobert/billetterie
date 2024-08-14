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
        Schema::create('ticket_types', function (Blueprint $table) {
            $table->id(); // Identifiant unique du type de ticket (ticket_type_id)
            $table->foreignId('event_id')->constrained('events'); // Clé étrangère vers la table events (ticket_type_event_id)
            $table->string('name', 50); // Nom du type de ticket (ticket_type_name)
            $table->mediumInteger('price'); // Prix du type de ticket (ticket_type_price)
            $table->integer('quantity'); // Quantité totale de tickets disponibles (ticket_type_quantity)
            $table->integer('real_quantity'); // Quantité réelle de tickets disponibles (ticket_type_real_quantity)
            $table->integer('total_quantity'); // Quantité totale de tickets (ticket_type_total_quantity)
            $table->mediumText('description'); // Description du type de ticket (ticket_type_description)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_types');
    }
};
