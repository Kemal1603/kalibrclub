<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{

    protected $fillable = [
        'title',
        'img',


    ];



    public function Albums()
    {
        return $this->belongsTo(Albums::class);
    }
}


