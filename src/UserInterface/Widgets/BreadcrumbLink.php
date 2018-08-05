<?php

namespace Laraning\Galaxia\UserInterface\Widgets;

class BreadCrumbLink
{
    public $label;
    public $link;

    public function __construct($label, $link = null)
    {
        [$this->label, $this->link] = [$label, $link];
    }
}
