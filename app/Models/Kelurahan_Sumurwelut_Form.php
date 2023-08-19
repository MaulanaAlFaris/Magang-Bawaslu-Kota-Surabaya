<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan_Sumurwelut_Form extends Model
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
        'uraian'
    ];
    protected $table ='Kelurahan_Sumurwelut_Form';
    public $timestamps = false;
}