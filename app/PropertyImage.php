<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $table = 'property_images';
    protected $guarded = ['id'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
