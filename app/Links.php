<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Episodes;

class Links extends Model
{
    protected $fillable = [
        'link', 'link_org', 'episode_id', 'res'
    ];
    public function episodes(){
    	return $this->belongsTo(Episodes::class);
    }
}
