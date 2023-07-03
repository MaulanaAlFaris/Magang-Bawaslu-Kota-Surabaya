<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahapan yang diawasi',
        'nama pelaksana tugas pengawasan',
        'jabatan',
        'nomor surat perintah tugas',
        'alamat',
        'bentuk',
        'tujuan',
        'sasaran',
        'waktu dan tempat',
        'uraian singkat hasil pengawasan'

    ];
    protected $table = 'form';
    public $timestamps = false;
}
