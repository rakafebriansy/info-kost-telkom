<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_bangunan',
        'cctv',
        'dapur',
        'jemuran',
        'ac',
        'bantal',
        'dispenser',
        'air_panas',
        'kamar_mandi_dalam',
        'kloset_duduk',
        'kloset_jongkok',
        'parkir_mobil',
        'parkir_motor',
        'listrik',
        'bayar_air',
        'wifi',
    ];
}
