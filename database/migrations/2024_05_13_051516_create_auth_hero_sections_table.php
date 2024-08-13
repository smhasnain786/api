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
        Schema::create('auth_hero_sections', function (Blueprint $table) {
            $table->id();   
            $table->string('title');   
            $table->string('subtitle');   
            $table->text('description');   
            $table->text('image');   
            $table->string('tagText');   
            $table->string('tagTitle');   
            $table->integer('author_id');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_hero_sections');
    }
};
