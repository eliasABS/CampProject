<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function category()
    {
        return $this->belongsTo('App\category');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
