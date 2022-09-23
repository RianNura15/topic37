<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    use HasFactory;
    protected $table="surats";
    protected $fillable=[
        'arti',
        'asma',
        'audio',
        'ayat',
        'keterangan',
        'nama',
        'nomor',
        'rukuk',
        'type',
        'urut'
    ];
}
