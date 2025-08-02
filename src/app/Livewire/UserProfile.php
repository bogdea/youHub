<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserProfile extends Component
{
    public $user;

    public function mount($username)
    {
        $this->user = User::where('username', $username)->with('videos')->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
