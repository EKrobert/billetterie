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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['Autre', 'Concert-Spectacle', 'Diner Gala', 'Festival', 'Formation']);
            $table->mediumText('description');
            $table->string('title', 30); 
            $table->dateTime('date'); 
            $table->string('image_url', 200); 
            $table->string('city', 100); 
            $table->string('address', 200);
            $table->enum('status', ['upcoming', 'completed', 'cancelled']); 
            $table->timestamp('created_on')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
