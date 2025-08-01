<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'video_path'];

      public function getVideoUrlAttribute()
    {
        return Storage::disk('r2')->url($this->video_path);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likes() {
        return $this->hasMany(VideoLike::class);
    }

}
