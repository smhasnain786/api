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
        Schema::create('auth_hero_v4_s', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('title'); 
            $table->text('description');   
            $table->text('image');   
            $table->string('firstBtn'); 
            $table->string('secondBtn'); 
            $table->string('videoURL'); 
            $table->integer('author_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_hero_v4_s');
    }
};
