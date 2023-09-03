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
        Schema::create('kelurahan_tanah_kali_kedinding_form', function (Blueprint $table) {
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
            $table->string('tanggal');
            $table->string('penomoran_judul');
            $table->string('peristiwa')->default('-');
            $table->string('tempat_kejadian_peristiwa')->default('-');
            $table->string('waktu_kejadian_peristiwa')->default('-');
            $table->string('pelaku_peristiwa')->default('-');
            $table->string('alamat_peristiwa')->default('-');
            $table->string('nama_saksi_1')->default('-');
            $table->string('alamat_saksi_1')->default('-');
            $table->string('nama_saksi_2')->default('-');
            $table->string('alamat_saksi_2')->default('-');
            $table->string('alat_bukti_1')->default('-');
            $table->string('alat_bukti_2')->default('-');
            $table->string('alat_bukti_3')->default('-');
            $table->string('barang_bukti_1')->default('-');
            $table->string('barang_bukti_2')->default('-');
            $table->string('barang_bukti_3')->default('-');
            $table->text('uraian_singkat_dugaan')->default('-');
            $table->string('fakta')->default('-');
            $table->text('analisa')->default('-');
            $table->string('peserta_pemilu_sengketa')->default('-');
            $table->string('tempat_sengketa')->default('-');
            $table->string('waktu_sengketa')->default('-');
            $table->string('bentuk_objek')->default('-');
            $table->string('identitas_objek')->default('-');
            $table->string('hari_objek')->default('-');
            $table->string('kerugian_objek')->default('-');
            $table->text('uraian_objek')->default('-');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelurahan_tanah_kali_kedinding_form');
    }
};
