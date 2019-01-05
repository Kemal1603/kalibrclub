<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{

    protected $fillable = [
        'album_name',



    ];


    public function photos()
    {
        return $this->hasMany(Photos::class,'albums_id');
    }


    public function playgrounds()
    {
        return $this->hasOne(Playgrounds::class, 'playground_id');
    }

}

