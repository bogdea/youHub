<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video;

class Home extends Component
{
    public $videos;

    public function mount()
    {
        $this->videos = Video::with('user')->latest()->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
