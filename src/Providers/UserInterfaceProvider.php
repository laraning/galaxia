<?php

namespace Laraning\Galaxia\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UserInterfaceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'galaxia-ui::partials.sidebar.tree',
            'Laraning\Galaxia\UserInterface\ViewComposers\SidebarComposer'
        );

        View::composer(
            'galaxia-ui::partials.breadcrumb',
            'Laraning\Galaxia\UserInterface\ViewComposers\BreadcrumbComposer'
        );

        View::composer(
            'galaxia-ui::partials.notifications.notification-list',
            'Laraning\Galaxia\UserInterface\ViewComposers\NotificationListComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
