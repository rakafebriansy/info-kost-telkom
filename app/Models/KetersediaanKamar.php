<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KetersediaanKamar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_bangunan',
        'ukuran_kamar',
        'jumlah_total_kamar',
        'jumlah_kamar_tersedia',
    ];
}
