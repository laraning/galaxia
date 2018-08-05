<?php

namespace Laraning\Galaxia\UserInterface\Widgets;

use Illuminate\Support\Collection;
use Laraning\Galaxia\UserInterface\Widgets\SidebarLink;

class Sidebar
{
    protected $tree;

    public function __construct()
    {
        $this->tree = new Collection();
    }

    public function link()
    {
        return new SidebarLink();
    }

    public function add(SidebarLink $link)
    {
        $this->tree->push($link);
    }

    public function getTree()
    {
        return $this->tree;
    }
}
