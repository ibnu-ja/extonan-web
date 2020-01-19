<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['id', 'anime_id', 'episode'];
    
    public function anime() {
        return $this->belongsTo('App\Anime');
    }
    public function link(){
        return $this->hasMany('App\Link');
    }
    public function thumbnail(){
        return $this->hasOne('App\Thumbnail');
    }
}
