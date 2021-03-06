<?php

namespace Laraning\Galaxia;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laraning\Boost\Traits\Migratable;

class GalaxiaServiceProvider extends ServiceProvider
{
    use Migratable;

    protected $migrationPath = __DIR__.'/../database/migrations/';
    protected $migrations = ['galaxia']; // No need to put "*"!

    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->loadRoutes();

        $this->loadViews();

        $this->loadCommands();

        $this->loadTranslations();

        $this->publishAssets();

        $this->publishRoutes();

        $this->publishConfiguration();

        $this->publishMigrations();
    }

    public function loadCommands()
    {
        $this->commands([
            \Laraning\Galaxia\Commands\CreateUserCommand::class,
            \Laraning\Galaxia\Commands\InstallCommand::class,
            \Laraning\Galaxia\Commands\GiveAccessCommand::class,
            \Laraning\Galaxia\Commands\DeployAuthCommand::class,
        ]);
    }

    public function register()
    {
        app('router')->aliasMiddleware('galaxia-authenticate', \Laraning\Galaxia\Middleware\Authenticate::class);
        app('router')->aliasMiddleware('galaxia-permission', \Spatie\Permission\Middlewares\PermissionMiddleware::class);
        app('router')->aliasMiddleware('galaxia-role', \Spatie\Permission\Middlewares\RoleMiddleware::class);
    }

    protected function publishConfiguration()
    {
        // Publish configuration.
        $this->publishes([
            __DIR__.'/../configuration/galaxia.php' => config_path('galaxia.php'),
        ], 'galaxia-configuration');

        // Publish configuration.
        $this->publishes([
            __DIR__.'/../configuration/flame.php' => config_path('flame.php'),
        ], 'galaxia-flame-configuration');

        // Merge configuration in case file already exists (Galaxia and Flame).
        $this->mergeConfigFrom(__DIR__.'/../configuration/galaxia.php', 'galaxia');
    }

    protected function loadRoutes()
    {
        // System routes.
        Route::middleware(['web'])
             ->group(path_separators(__DIR__.'/../routes/galaxia.php'));
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(
            path_separators(base_path('vendor/laraning/galaxia/resources/views')),
            'galaxia-ui'
        );
    }

    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('galaxia'),
        ], 'galaxia-assets');

        $this->publishes([
            __DIR__.'/AppFeatures/Galaxia' => app_path('Galaxia'),
        ], 'galaxia-app-features');
    }

    protected function publishRoutes()
    {
        $this->publishes([
            __DIR__.'/../Routes' => base_path('routes'),
        ], 'galaxia-routes');
    }

    protected function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'galaxia-text');
    }
}
