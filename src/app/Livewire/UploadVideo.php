<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class UploadVideo extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $video;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'video' => 'required|file|mimes:mp4,mov,webm|max:51200', // 50mb
    ];

    public function updatedVideo()
    {
    logger('uploaded:', [$this->video]);
    }

    public function save()
    {
        $this->validate();

        $path = $this->video->store('videos', 'r2');

        Video::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'description' => $this->description,
            'video_path' => $path,
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.upload-video');
    }
}
