<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'category_id');
    }
}
