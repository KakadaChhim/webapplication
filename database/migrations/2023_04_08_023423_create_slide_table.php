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
        Schema::create('slide', function (Blueprint $table) {
            $table->id();
            $table->string('ptext')->nullable();
            $table->string('htext')->nullable();
            $table->string('description')->nullable();
            $table->string('button_1')->nullable();
            $table->string('button_2')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slide');
    }
};
