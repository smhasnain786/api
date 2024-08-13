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
        Schema::create('auth_events', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title');  
            $table->text('description');
            $table->string('event_author_name');
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('btn');
            $table->string('location');
            $table->string('venue');
            $table->string('address');
            $table->string('organizer');
            $table->string('price');
            $table->string('remaining_tickets');
            $table->string('phone');
            $table->string('email');
            $table->string('slug');
            $table->integer('author_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_events');
    }
};
