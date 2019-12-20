<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = ['judul', 'sinopsis'];
    protected $primaryKey = 'id';
    public $incrementing = false;

    
    public function genres(){
        return $this->hasMany('App\Genre');
    }
    public function gambar(){
        return $this->hasOne('App\Gambar');
    }
    public function episode(){
        return $this->hasOne('App\Episode');
    }
    
}
