<?php

namespace Laraning\Galaxia\Listeners;

use Laraning\Galaxia\Factories\Galaxia;
use Illuminate\Queue\InteractsWithQueue;
use Laraning\Galaxia\Events\UserNotified;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyUser
{
    public function __construct()
    {
        //
    }

    public function handle(UserNotified $event)
    {
        // Insert notification.
        Galaxia::notification()
               ->from()
               ->to()
               ->title()
               ->baseline()
               ->info()
               ->thumbnail()
               ->color()
               ->start_at()
               ->end_at();
    }
}
