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
        Schema::create('auth_cta4s', function (Blueprint $table) {
            $table->id();
            $table->string('backgroundImage');
            $table->string('title');
            $table->string('subtitle');
            $table->string('text');
            $table->string('btnText');
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
        Schema::dropIfExists('auth_cta4s');
    }
};
