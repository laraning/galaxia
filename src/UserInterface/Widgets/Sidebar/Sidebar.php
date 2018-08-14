<?php

namespace Laraning\Galaxia\UserInterface\Widgets\Sidebar;

use Illuminate\Support\Collection;

class Sidebar
{
    protected $tree;
    protected $link;

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
