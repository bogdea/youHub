<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Auth;

Route::get('/', Home::class);
Route::get('/auth', Auth::class);
Route::post('/logout', [Auth::class, 'logout'])->name('logout');
