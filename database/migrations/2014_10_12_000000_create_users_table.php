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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('grade');
            $table->enum('class_type', ['Kandyan', 'Bollywood', 'Indian-classic']);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('role', ['admin', 'student'])->default('student'); // Role field
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
