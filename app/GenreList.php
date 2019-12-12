<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreList extends Model
{
    public function getRouteKeyName()
    {
        return 'genre';
    }
}
