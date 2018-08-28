<?php

namespace Laraning\Galaxia\UserInterface\Composers;

use Illuminate\View\View;
use Laraning\Galaxia\UserInterface\Widgets\Breadcrumb\BreadCrumb;

class BreadcrumbComposer
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
        // Render breadcrumb.
        $bc = new BreadCrumb();

        // Generate auto-links given the request uri.
        $view->with('items', $bc->generateLinks());
    }
}
