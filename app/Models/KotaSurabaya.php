<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaSurabaya extends Model
{
    use HasFactory;
    protected $table = 'kota_surabaya';
    public $timestamps = false;
    protected $fillable =[
        'nama'
    ];
}
