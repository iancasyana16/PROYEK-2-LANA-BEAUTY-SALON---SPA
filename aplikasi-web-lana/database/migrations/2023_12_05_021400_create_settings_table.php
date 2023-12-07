<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('contact_us');
            $table->string('alamat');
            $table->string('telpon');
            $table->string('opening_us');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('asisten_us');
            $table->string('member_us');
            $table->string('desk_member');
            $table->string('sosial_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
