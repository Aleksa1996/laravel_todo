<?php

namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $skipFieldsByGetProperties = [];

    public function getProperties()
    {
        if ($this->id) {
            return array_diff_key($this->toArray(), array_flip($this->skipFieldsByGetProperties));
        }

        return collect(Schema::getColumnListing($this->getTable()))
            ->filter(function ($value) {
                return !in_array($value, $this->skipFieldsByGetProperties);
            })->mapWithKeys(function ($value) {
                return [$value => ''];
            })->toArray();
    }
}
