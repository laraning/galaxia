<?php

namespace Laraning\Galaxia\Listeners;

use Laraning\Galaxia\Events\UserNotified;
use Laraning\Galaxia\Factories\Galaxia;

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
