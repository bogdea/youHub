<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function like(Video $video)
        {
        if (!Auth::check()) {
        return redirect('/auth');
        }    

        $like = $video->likes()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['is_like' => true]
        );

    return back();
}

public function dislike(Video $video)
    {
        if (!Auth::check()) {
        return redirect('/auth');
        }

        $dislike = $video->likes()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['is_like' => false]
        );

    return back();
    }
}
