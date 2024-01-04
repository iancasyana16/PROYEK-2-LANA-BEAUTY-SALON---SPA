<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RollbackStatusColumnFromBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Uncomment the line below if you want to add the 'status' column back
            // $table->enum('status', ['diterima', 'ditolak', 'diproses'])->default('diproses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
