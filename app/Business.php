<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function location()
    {
        return $this->hasOne('App\Location');
    }
}
