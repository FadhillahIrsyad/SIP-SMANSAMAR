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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username',255);
            $table->unsignedBigInteger('id_creator')->nullable();
            $table->foreign( 'id_creator' )->references('id') ->on('users');
            $table->unsignedBigInteger('id_updater')->nullable();
            $table->foreign( 'id_updater' )->references( 'id' )->on('users');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references( 'id' )->on('role_akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
