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
        Schema::create('kelurahan_keputih_form', function (Blueprint $table) {
            $table->string('tahapan')->unique();
            $table->string('nama_pelaksana');
            $table->string('jabatan');
            $table->string('nomor');
            $table->string('alamat');
            $table->string('bentuk');
            $table->text('tujuan');
            $table->string('sasaran');
            $table->string('waktu_dan_tempat');
            $table->text('uraian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelurahan_keputih_form');
    }
};
