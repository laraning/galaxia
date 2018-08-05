<?php

namespace Laraning\Galaxia\UserInterface\Widgets;

use Illuminate\Support\Collection;
use Laraning\Galaxia\UserInterface\Widgets\Sidebar;

class SidebarLink
{
    public $link;
    public $children;
    public $title;
    public $url = '#';
    public $target = '_self';
    public $baseline;
    public $thumbnail = 'pg-mail';

    public function __construct()
    {
        $this->link = new \StdClass();
        $this->children = new Collection();
    }

    public function withUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    public function withTarget(string $target)
    {
        $this->target = $target;
        return $this;
    }

    public function withBaseline(string $baseline)
    {
        $this->baseline = $baseline;
        return $this;
    }

    public function withTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function addChild(SidebarLink $child)
    {
        $this->children->push($child);
    }

    public function withThumbnail(string $thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }
}
