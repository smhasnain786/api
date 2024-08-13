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
        Schema::create('author_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email');   
            $table->string('subject');   
            $table->text('message');     
            $table->integer('author_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_contacts');
    }
};
