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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('alternative_name')->nullable();
            $table->string('en_name')->nullable();
            $table->json('names')->nullable();
            $table->year('year')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('slogan')->nullable();
            $table->string('status')->nullable();
            $table->json('rating')->nullable();
            $table->json('votes')->nullable();
            $table->integer('movie_length')->nullable();
            $table->string('logo')->nullable();
            $table->string('poster')->nullable();
            $table->json('videos')->nullable();
            $table->json('countries')->nullable();
            $table->json('persons')->nullable();
            $table->json('premier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
