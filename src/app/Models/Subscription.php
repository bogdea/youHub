<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['subscriber_id', 'subscribed_to_id'];
    
    public function subscriber() {
        return $this->belongsTo(User::class, 'subscriber_id');
    }

    public function subscribedTo() {
        return $this->belongsTo(User::class, 'subscribed_to_id');
    }
}
