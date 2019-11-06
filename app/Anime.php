<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Anime extends Model
{
    protected $table = 'animes';
    protected $fillable = ['judul', 'sinopsis'];

    public function genres(){
        return $this->hasMany('App\Genres');
    }
    public function episodes(){
        return $this->hasMany('App\Episodes', 'animes_id');
    }
    public function gambar(){
        return $this->hasOne('App\Gambar');
    }

    
}
