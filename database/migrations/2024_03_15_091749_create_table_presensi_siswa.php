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
        Schema::create('presensi_siswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_creator');
            $table->foreign('id_creator')->references('id')->on('users');
            $table->unsignedBigInteger('id_updater');
            $table->foreign('id_updater')->references('id')->on('users');
            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswa');
            $table->string('id_status_kehadiran',255);
            $table->foreign('id_status_kehadiran')->references('id_sk')->on('status_kehadiran');
            $table->string('keterangan',255);
            $table->string('pelanggaran',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_siswa');
    }
};
