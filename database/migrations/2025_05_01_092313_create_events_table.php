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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('event_location');
            $table->date('event_date');
            $table->time('event_time');
            $table->enum('event_category', ['Wedding', 'Birthday', 'Corporate', 'Private', 'Other']);
            $table->enum('package_type', ['Standard', 'Premium', 'Pro']);
            $table->integer('num_dancers');
            $table->enum('status', ['upcoming', 'finished'])->default('upcoming');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
