<?php

namespace App\Listeners;

use App\Events\ShowLoader;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenerShowLoader
{
    /**
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
     * @param  \App\Events\ShowLoader  $event
     * @return void
     */
    public function handle(ShowLoader $event)
    {
        //
    }
}
