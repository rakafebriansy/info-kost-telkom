<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_bangunan',
        'jenis',
        'nama',
        'tipe',
        'deskripsi',
        'peraturan',
        'tahun_dibangun',
        'jumlah_laporan',
        'status',
        'kategori',
        'harga',
        'is_overkos',
        'is_active',
        'is_nego',
    ];
}
