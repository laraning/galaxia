<?php

namespace Laraning\Galaxia\UserInterface\Widgets\Notification;

use Illuminate\Support\Collection;

class NotificationList
{
    protected $links;
    protected $footer = null;

    public function __construct()
    {
        $this->links = new Collection();
    }

    public function add(NotificationLink $link)
    {
        $this->links->push($link);
    }

    public function list()
    {
        return $this->links;
    }

    public function addFooter($title = '', $url = '#')
    {
        $this->footer = new \StdClass();
        $this->footer->title = $title;
        $this->footer->url = $url;
    }

    public function footer()
    {
        return $this->footer;
    }
}
