<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anime;

class Genres extends Model
{
    protected $fillable = [
        'genre', 'anime_id'
    ];
    public function anime()
    {
        return $this->belongsTo('App\Anime');
    }
}
