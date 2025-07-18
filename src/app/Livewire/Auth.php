<?php

namespace App\Livewire;

use Livewire\Component;

class Auth extends Component
{
public $mode = 'login';
public $username='';
public $password='' ;


public function switchToSignUp() {
    $this->mode = 'signup';
}

public function switchToLogin() {
    $this->mode = 'login';
}

public function register() {
    $this->validate([
        'username' => 'required|min:3|max:16|unique:users,username',
        'password' => 'required|min:6',
    ]);

    $user = \App\Models\User::create([
        'username' => $this->username,
        'password' => \Hash::make($this->password),
    ]);

    \Auth::login($user);

    return redirect('/');
}

public function login() {
    $this->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (\Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
        session()->regenerate();
    }

    return redirect('/');
}

public function logout() {
    \Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
}

    public function render()
    {
        return view('livewire.auth')->layout('livewire.layouts.auth-layout');
    }
}
