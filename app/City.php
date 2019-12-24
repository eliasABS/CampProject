<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}