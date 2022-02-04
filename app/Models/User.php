<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function wall()
    {
       $friends= $this->follows()->pluck('id');
       return Tweet::whereIn('user_id',$friends)->orwhere('user_id',$this->id)->latest()->get();
    }

    public function tweets(){

        return $this->hasMany(Tweet::class);
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function following(User $user){
      
        return $this->follows()->where('following_user_id', $user->id)->exists();

    }

    public function follows()
    {
        return $this->belongsToMany( User::class,'follows','user_id', 'following_user_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
