<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    //
    protected $table = 'kabkota';
    protected $fillable = [
        'nama',
        'provinsi_id',
        'alt_nama',
        'lat',
        'long',
    ];
    public function provinsi() {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }
}
