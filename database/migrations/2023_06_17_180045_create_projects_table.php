<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['skills', 'work'])->default('skills');
            $table->string('title');
            $table->string('url');
            $table->string('details');
            $table->binary('image');
            $table->timestamps();

        });
    }

};