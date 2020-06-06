<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkomodasiDalam extends Model
{
    protected $table = 't_akomodasidlm';
    public $primaryKey = 'id_dalam';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'alamat',
    ];
}
