<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playgrounds extends Model
{

    protected $fillable =

        [
        'playgrounds',
          'title',
            'description',
           'short_description',
            'google_map',
            'address',
            'slug'

        ];







    public function albums()
    {
        return $this->hasOne(Albums::class, 'playground_id');
    }
}
