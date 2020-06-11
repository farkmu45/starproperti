<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    protected $table = 'property_status';

    public function properties()
    {
        return $this->hasMany(Property::class, 'status_id');
    }
}
