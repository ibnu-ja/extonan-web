<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'genre', 'anime_id'
    ];
    public function anime()
    {
        return $this->belongsTo('App\Anime');
    }
}
