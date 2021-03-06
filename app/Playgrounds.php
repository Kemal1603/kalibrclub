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

    /*При помощи этого метода мы указываем, что данная модель PLaygrounds может содержать в себе одну модель Albums*/
}
