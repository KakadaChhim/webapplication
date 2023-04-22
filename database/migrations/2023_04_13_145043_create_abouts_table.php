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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('h_6')->nullable();
            $table->string('h_1')->nullable();
            $table->string('p_1')->nullable();
            $table->string('p_2')->nullable();
            $table->string('list_1')->nullable();
            $table->string('list_2')->nullable();
            $table->string('list_3')->nullable();
            $table->string('list_4')->nullable();
            $table->string('list_5')->nullable();
            $table->string('list_6')->nullable();
            $table->string('button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
