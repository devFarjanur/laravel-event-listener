<?php

namespace App\Listeners;

use App\Events\PostPublished;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyUser implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::raw("{$event->post->content}", function ($message) use ($user, $event) {
                $message->to($user->email)
                    ->subject($event->post->title);
            });
        }
    }
}
