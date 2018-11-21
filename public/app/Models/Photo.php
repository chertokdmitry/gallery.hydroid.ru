<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function album()
    {
        return $this->hasOne('App\Models\Album', 'id', 'album_id');
    }
}
