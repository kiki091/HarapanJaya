<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryTrans
 */
class Pasien extends Model
{
    protected $table = 'pasien';

    public $timestamps = true;

    protected $fillable = [
        'nama_lengkap'
    ];

    protected $guarded = [];

        
}