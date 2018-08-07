<?php

namespace Laraning\Galaxia\Providers;

use Illuminate\Support\Facades\Blade;
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

        Blade::directive(
            'glxfa',
            function ($arguments) {
                $arguments = str_replace('\'', '', $arguments);
                $args = explode(',', $arguments);
                $class = count($args >= 2) ? $args[1]:
                                             null;

                return "<i class='fa fa-". $args[0] . " ". $class . "'></i>";
            }
        );

        Blade::directive(
            'glxlogo',
            function ($arguments) {
                $arguments = str_replace('\'', '', $arguments);
                $args = explode(',', $arguments);
                $backgrnd = $args[0];
                $file = $args[1];
                return "<?php echo '/galaxia/custom/logos/" . $backgrnd . "/" . $file . ".jpg' ?>";
            }
        );

        Blade::directive(
            'glxinput',
            function ($expression) {
                return "<?php echo (new \\Laraning\\Flame\\Blade\\Directives\\Component('galaxia-ui::widgets.forms.input.widget', $expression))->render() ?>";
            }
        );

        Blade::directive(
            'glxcardstd',
            function ($expression) {
                return "<?php echo (new \\Laraning\\Flame\\Blade\\Directives\\Component('galaxia-ui::widgets.cards.standard.widget', ['title' => $expression ?? null]))->render() ?>";
            }
        );

        Blade::directive(
            'endglxcardstd',
            function () {
                return "<?php echo (new \\Laraning\\Flame\\Blade\\Directives\\Component('galaxia-ui::widgets.cards.standard.footer'))->render() ?>";
            }
        );

        Blade::directive(
            'glxcardheader',
            function ($expression) {
                    return "<?php echo (new \\Laraning\\Flame\\Blade\\Directives\\Component('galaxia-ui::widgets.cards.standard.header', ['title' => $expression ?? null]))->render() ?>";
            }
        );
    }
}
