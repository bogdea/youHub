<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video;

class VideoPage extends Component
{
    public $video;

    public function mount(Video $video)
    {
        $this->video = $video;
    }

    public function render()
    {
        return view('livewire.video-page');
    }
}
