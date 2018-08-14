<?php

namespace Laraning\Galaxia\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Laraning\Galaxia\Events\UserNotified' => [
            'Laraning\Galaxia\Listeners\NotifyUser',
        ],
    ];

    public function boot()
    {
    }
}
