<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_bangunan',
        'lokasi',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'deskripsi_alamat',
    ];
}
