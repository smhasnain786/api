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
        Schema::create('auth_cta5s', function (Blueprint $table) {
            $table->id();
            $table->string('backgroundImage');
            $table->string('title');
            $table->string('text1');
            $table->string('text2');
            $table->string('icon');
            $table->integer('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_cta5s');
    }
};
