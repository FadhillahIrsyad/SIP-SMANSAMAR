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
            $table->unsignedBigInteger('id_creator');
            $table->foreign('id_creator')->references('id')->on('users');
            $table->unsignedBigInteger('id_updater');
            $table->foreign( 'id_updater')->references( 'id' )->on('users');
            $table->string('nama', 255);
            $table->string('asal', 255);
            $table->integer('no_hp');
            $table->string('keperluan', 255);
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
