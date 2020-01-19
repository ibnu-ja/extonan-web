<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    public function episode(){
        return $this->belongsTo('App\Episode');
    }
}
