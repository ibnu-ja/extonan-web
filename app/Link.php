<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['id', 'link', 'episode_id', 'res'];
    public function episode() {
        return $this->belongsTo('App\Episode');
    }
}
