<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->enum('status_booking', ['diterima','diproses' ,'ditolak'])->default('diproses')->after('waktu_booking');
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('status_booking');
        });
    }
};
