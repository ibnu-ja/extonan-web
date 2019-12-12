<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $fillable = ['nama', 'dimensions', 'lokasi'];

    public function anime() {
        return $this->belongsTo('App\Anime');
    }
}
