<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\OrderEvent as EventsOrderEvent;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class SendMailOrder implements ShouldQueue
{
    /**
     *
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventsOrderEvent $event)
    {
       // Mail::to("nguyendoanh18022000@gmail.com")
       Mail::to("nguyendoanh18022000@gmail.com")->send(new OrderMail($event->username, $event->email));
        dd($event->username);
        // logger()->debug('abc', [
        //     'dataa' => $event->email
        // ]);
    }
}
