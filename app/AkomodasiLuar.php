<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkomodasiLuar extends Model
{
    protected $table = 't_akomodasiluar';
    public $primaryKey = 'id_luar';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'alamat', 'no_telp',
    ];
}
