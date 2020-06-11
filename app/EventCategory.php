<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $guarded = ['id'];

    public function events()
    {
        return $this->hasMany(Event::class, 'category_id');
    }
}
