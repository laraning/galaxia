<?php

namespace Laraning\Galaxia\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
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
            config('galaxia.views.composers.sidebar')
        );

        View::composer(
            'galaxia-ui::partials.breadcrumb',
            config('galaxia.views.composers.breadcrumb')
        );

        View::composer(
            'galaxia-ui::partials.notifications.notification-list',
            config('galaxia.views.composers.notifications')
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->bootBladeDirectives();
    }

    protected function bootBladeDirectives()
    {
        Blade::directive(
            'glxinput',
            function ($expression) {
                return "<?php echo (new \\Laraning\\Flame\\Blade\\Directives\\Component('galaxia-ui::widgets.forms.input.widget', $expression))->render() ?>";
            }
        );
    }
}
