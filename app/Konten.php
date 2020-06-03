<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    public $primaryKey = 'id_konten';

    protected $table = 't_konten';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'kategori', 'isi', 'thumbnail',
    ];

    public function user()
    {
    	return $this->hasOne('\App\Kategori','kategori','kategori');
    }
}
