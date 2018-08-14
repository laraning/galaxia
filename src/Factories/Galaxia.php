<?php

namespace Laraning\Galaxia\Factories;

use Laraning\Galaxia\Services\Notification;

class Galaxia
{
    public static function notification()
    {
        return new Notification();
    }
}
