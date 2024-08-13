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
        Schema::create('auth_about_v1_s', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('subtitle'); 
            $table->text('image');   
            $table->text('videoURL');   
            $table->text('description');
            $table->integer('author_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_about_v1_s');
    }
};
