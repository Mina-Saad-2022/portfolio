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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('category', ['skills', 'work'])->default('skills');
            $table->string('title');
            $table->string('url');
            $table->string('details');
            $table->binary('image');

            // $table->enum('category', ['skills', 'category'])->default('skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');

    }
};
