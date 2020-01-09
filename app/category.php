<?php

namespace App;
use app\project;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function projects()
    {
        return $this->hasMany('Project');
    }
}
