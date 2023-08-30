<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan_Tanjungsari_Form extends Model
{
    use HasFactory;
    protected $fillable=[
        'tahapan',
        'nama_pelaksana',
        'jabatan',
        'nomor',
        'alamat',
        'bentuk',
        'tujuan',
        'sasaran',
        'waktu_dan_tempat',
        'uraian',
        'peristiwa',
        'tempat_kejadian_peristiwa',
        'pelaku_peristiwa',
        'alamat_peristiwa',
        'nama_saksi_1',
        'alamat_saksi_1',
        'nama_saksi_2',
        'alamat_saksi_2',
        'alat_bukti_1',
        'alat_bukti_2',
        'alat_bukti_3',
        'barang_bukti_1',
        'barang_bukti_2',
        'barang_bukti_3',
        'uraian_singkat_dugaan',
        'fakta',
        'analisa',
        'peserta_pemilu_sengketa',
        'tempat_sengketa',
        'waktu_sengketa',
        'bentuk_objek',
        'identitas_objek',
        'hari_objek',
        'kerugian_objek',
        'uraian_objek'

       
    ];
    public static $defaults = [
        'peristiwa' => '-',
        'tempat_kejadian_peristiwa' => '-',
        'waktu_kejadian_peristiwa' => '-',
        'pelaku_peristiwa' => '-',
        'alamat_peristiwa' => '-',
        'nama_saksi_1' => '-',
        'alamat_saksi_1' => '-',
        'nama_saksi_2' => '-',
        'alamat_saksi_2' => '-',
        'alat_bukti_1' => '-',
        'alat_bukti_2' => '-',
        'alat_bukti_3' => '-',
        'barang_bukti_1' => '-',
        'barang_bukti_2' => '-',
        'barang_bukti_3' => '-',
        'uraian_singkat_dugaan' => '-',
        'fakta' => '-',
        'analisa' => '-',
        'peserta_pemilu_sengketa' => '-',
        'tempat_sengketa' => '-',
        'waktu_sengketa' => '-',
        'bentuk_objek' => '-',
        'identitas_objek' => '-',
        'hari_objek' => '-',
        'kerugian_objek' => '-',
        'uraian_objek' => '-',
    ];
    protected $table ='Kelurahan_Tanjungsari_Form';
    public $timestamps = false;
}
