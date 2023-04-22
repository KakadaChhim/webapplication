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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('h6')->nullable();
            $table->string('h1')->nullable();
            $table->string('image')->nullable();
            $table->string('button1');
            $table->string('button2');
            $table->string('price');
            $table->string('icon');
            $table->string('h5')->nullable();
            $table->string('teacher_name');
            $table->string('time');
            $table->string('student');
            $table->string('small')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
