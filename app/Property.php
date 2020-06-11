<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class, 'status_id');
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'type_id');
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class, 'property_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
