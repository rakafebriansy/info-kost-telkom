<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBangunan extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_user',
        'id_bangunan',
    ];
}
