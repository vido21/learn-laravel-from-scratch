<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function getAvatarAttribute($value)
    {
        if ($value) {
            return asset('storage/' . $value) ;
        } else {
            return 'storage/avatars/tqDdi4fLiJwVAYiBviuCNYErtUO7FwSgTEHA56fF.jpeg';
        }
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        $tweets = Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id)
                ->withLikes()
                ->latest()
                ->paginate(1);
        return $tweets;
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function path($append = '')
    {
        $path = route('profile.show', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->belongsToMany(Tweet::class, 'likes');
    }
}
