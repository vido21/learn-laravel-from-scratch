<?php

namespace App;

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
        'name', 'email', 'password',
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

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        $tweets = Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id)
                ->latest()
                ->get();
        return $tweets;
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }
}
