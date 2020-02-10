<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreList extends Model
{
    protected $primaryKey = 'genre';
    public $incrementing = false;

    public function getRouteKeyName()
    {
        return 'genre';
    }
}
