<?php

namespace Laraning\Galaxia\UserInterface\ViewComposers;

use Illuminate\View\View;
use Laraning\Galaxia\UserInterface\Widgets\Sidebar;

class SidebarComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $sidebar = new Sidebar();
        $link1 = $sidebar->link()->withTitle('Test 1')->withBaseline('154 notifications');
        $link2 = $sidebar->link()->withTitle('Test 2');
        $link3 = $sidebar->link()->withTitle('Child 1 for 1');
        $link4 = $sidebar->link()->withTitle('Child 1 for 2');

        $link2->addChild($link4);
        $link2->addChild($link3);

        $sidebar->add($link1);
        $sidebar->add($link2);

        $view->with('items', $sidebar);
    }
}
