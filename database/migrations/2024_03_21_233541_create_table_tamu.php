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
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama',255);
            $table->string('no_hp',255);
            $table->date('tanggal');
            $table->string('keperluan',255);
            $table->string('keterangan',255);
            $table->string('penanggung_jawab',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamu');
    }
};
