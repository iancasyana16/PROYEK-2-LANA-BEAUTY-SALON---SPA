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
        Schema::create('salons', function (Blueprint $table) {
            $table->integer('id_salon')->primary();
            $table->string('nama_salon');
            $table->string('foto_salon');
            $table->string('logo_salon');
            $table->string('alamat_salon');
            $table->text('deskripsi')-> nullable();
            $table->text('visi_salon')-> nullable();
            $table->text('misi_salon')-> nullable();
            $table->time('weekday_buka');
            $table->time('weekday_tutup');
            $table->time('weekend_buka');
            $table->time('weekend_tutup');
            $table->string('facebook')-> nullable();
            $table->string('instagram')-> nullable();
            $table->string('twitter') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};
