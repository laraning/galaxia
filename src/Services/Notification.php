<?php

namespace Laraning\Galaxia\Services;

use Illuminate\Database\Eloquent\Model;

class Notification
{
    function __construct()
    {
    }

    public function from(Model $user)
    {
        return $this;
    }

    public function to(Model $user)
    {
        return $this;
    }

    public function title(string $title)
    {
        return $this;
    }

    public function baseline(string $baseline)
    {
        return $this;
    }

    public function info(string $info)
    {
        return $this;
    }

    public function thumbnail(string $thumbnail)
    {
        return $this;
    }

    public function color(string $color)
    {
        return $this;
    }

    public function start_at(string $startAt)
    {
        return $this;
    }

    public function end_at(string $endAt)
    {
        return $this;
    }

    public function send()
    {
        return true;
    }
}
