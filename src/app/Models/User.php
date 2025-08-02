<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
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

    public function videos()
    {
        return $this->hasMany(\App\Models\Video::class);
    }

    public function videoLikes()
    {
        return $this->hasMany(\App\Models\VideoLike::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(\App\Models\Subscription::class, 'subscriber_id');
    }

    public function subscribers()
    {
        return $this->hasMany(\App\Models\Subscription::class, 'subscribed_to_id');
    }
}