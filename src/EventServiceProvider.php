<?php

namespace Laraning\Galaxia;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
