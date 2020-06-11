<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'property_types';


    public function properties()
    {
        return $this->hasMany(Property::class, 'status_id');
    }
}
