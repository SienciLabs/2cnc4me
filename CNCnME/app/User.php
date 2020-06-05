<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'avatar','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Functions i have created from the tutorial
    public function timeline()
    {
        //Include all the user's tweets
        //Tweets of everyone they follow in desc order by date

        $friends = $this->follows()->pluck('id');
        return Post::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()->get();

    }


    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }
    //Provides a general path to the user
    public function path($append ='')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path; 
    }
}   
