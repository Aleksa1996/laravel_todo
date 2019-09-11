<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends BaseModel
{

    protected $fillable = ['firstname', 'lastname'];
    protected $skipFieldsByGetProperties = ['id', 'created_at', 'updated_at'];

    public function positions()
    {
        return $this->belongsToMany('App\Position');
    }
}
