<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Episodes extends Model
{
    protected $table = 'episodes';

    public function simpan ($data, $slug) {
        $anime = Anime::select('id', 'judul', 'slug')->where('slug', '=', $slug)->first();
        $this->episode = $data['episode'];
        $this->animes_id = $anime->id;
        $this->save();
    }
    public function sunting($data, $id) {
        $anime = Anime::find($id)->firstOrFail();
        $anime->episode = $data['episode'];
        $this->save();
    }
    public function animes(){
    	return $this->belongsTo('App\Anime', 'animes_id');
    }
    public function links(){
    	return $this->hasMany('App\Links');
    }
    
}
