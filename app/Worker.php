<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function positions()
    {
        return $this->belongsToMany('App\Position');
    }
}
