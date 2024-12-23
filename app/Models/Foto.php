<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_bangunan',
        'bangunan_depan',
        'tampilan_dalam',
        'tampak_jalan',
        'depan_kamar',
        'dalam_kamar',
        'kamar_mandi',
    ];
}
