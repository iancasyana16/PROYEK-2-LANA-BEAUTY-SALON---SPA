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
        Schema::create('bookings_layanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bookings');
            $table->unsignedBigInteger('id_layanan');
            $table->timestamps();

            $table->foreign('id_bookings')->references('id')->on('bookings')->onDelete('cascade');;
            $table->foreign('id_layanan')->references('id')->on('layanans')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
