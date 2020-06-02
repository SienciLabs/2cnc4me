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

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/200?u=" . $this->email;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Functions i have created
    public function timeline()
    {
        //Include all the user's tweets
        //Tweets of everyone they follow in desc order by date

        $friends = $this->follows()->pluck('id');
        return Post::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()->get();

    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //Function used to get data from the database
    public function getRouteKeyName()
    {
        return 'name';  //Matches with the name given from the route to the database
    }
}
