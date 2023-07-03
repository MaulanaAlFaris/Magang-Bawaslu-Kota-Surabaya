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
        Schema::create('form', function (Blueprint $table) {
            $table->string('tahapan yang diawasi',200)->unique();
            $table->string('nama pelaksana tugas pengawasan',200);
            $table->string('jabatan');
            $table->string('nomor surat perintah tugas');
            $table->string('alamat',200);
            $table->string('bentuk');
            $table->text('tujuan');
            $table->string('sasaran');
            $table->string('waktu dan tempat');
            $table->text('uraian singkat hasil pengawasan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
