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
        Schema::create('dance_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('grade');
            $table->enum('dance_type', ['Kandyan', 'Bollywood', 'Indian-classic']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dance_classes');
    }
};
