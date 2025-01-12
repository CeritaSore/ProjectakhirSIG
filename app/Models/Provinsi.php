<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    protected $table = 'provinsi';
    protected $fillable = ['nama', 'alt_nama', 'lat', 'long'];
    public function kabkota() {
        return $this->hasMany(Kabkota::class, 'id_provinsi', 'id');
    }
}
