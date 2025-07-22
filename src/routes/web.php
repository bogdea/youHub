<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Auth;
use App\Livewire\VideoPage;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', Home::class);
Route::get('/auth', Auth::class);
Route::post('/logout', [Auth::class, 'logout'])->name('logout');

Route::get('/video/{video}', VideoPage::class)->name('videos.show');
Route::post('/video/{video}/like', [VideoController::class, 'like'])->name('video.like');
Route::post('/video/{video}/dislike', [VideoController::class, 'dislike'])->name('video.dislike');

Route::post('/subscribe/{user}', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::post('/unsubscribe/{user}', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe');