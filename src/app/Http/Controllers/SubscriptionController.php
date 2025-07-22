<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function subscribe(User $user)
    {
        if (!Auth::check()) return redirect('/auth');

        Auth::user()->subscriptions()->firstOrCreate([
            'subscribed_to_id' => $user->id
        ]);

        return back();
    }

    public function unsubscribe(User $user)
    {
        if (!Auth::check()) return redirect('/auth');

        Auth::user()->subscriptions()->where('subscribed_to_id', $user->id)->delete();

        return back();
    }
}
