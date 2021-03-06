<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'address', 'whatsapp_number',
        'instagram_link', 'facebook_link', 'youtube_link', 'twitter_link', 'photo', 'id_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function isFreelanceAgent()
    {
        return $this->role_id == 1;
    }

    public function isInternalAgent()
    {
        return $this->role_id == 2;
    }

    public function isAdmin()
    {
        return $this->role_id == 3;
    }
}
