<?php

namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Position extends BaseModel
{
    protected $fillable = ['name'];
    protected $skipFieldsByGetProperties = ['id', 'created_at', 'updated_at'];

    public function workers()
    {
        return $this->belongsToMany('App\Worker');
    }
}
