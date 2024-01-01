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
        // Menambahkan kolom 'no_hp'
        Schema::table('admin', function (Blueprint $table) {
            $table->string('no_hp')->after('password'); // Sesuaikan 'kolom_lain' dengan kolom setelahnya
        });

        // Menghapus kolom 'alamat'
        Schema::table('admin', function (Blueprint $table) {
            $table->dropColumn('alamatAdmin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika perlu, mendefinisikan logika mundur
        Schema::table('admin', function (Blueprint $table) {
            $table->dropColumn('no_hp');
            $table->string('alamatAdmin');
        });
    }
};
