<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Episodes;

class Links extends Model
{
    protected $fillable = [
        'link', 'episode_id', 'res'
    ];
    public function episodes(){
    	return $this->belongsTo(Episodes::class);
    }
}
