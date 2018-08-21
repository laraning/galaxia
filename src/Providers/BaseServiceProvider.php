<?php

namespace Laraning\Galaxia\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
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
            \Laraning\Galaxia\Commands\InitCommand::class,
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

    public function publishMigrations()
    {
        $timestamp = date('Y_m_d_His', time());
        $this->publishes([
            __DIR__.'/../Database/Migrations/create_galaxia_schema.php.stub' => $this->app->databasePath()."/migrations/{$timestamp}_create_galaxia_schema.php",
        ], 'galaxia-create-schema');
    }

    protected function publishConfiguration()
    {
        // Publish configuration.
        $this->publishes([
            __DIR__.'/../Configuration/galaxia.php' => config_path('galaxia.php'),
        ], 'galaxia-configuration');

        // Publish configuration.
        $this->publishes([
            __DIR__.'/../Configuration/flame.php' => config_path('flame.php'),
        ], 'galaxia-flame-configuration');

        // Merge configuration in case file already exists (Galaxia and Flame).
        $this->mergeConfigFrom(__DIR__.'/../Configuration/galaxia.php', 'galaxia');
    }

    protected function loadRoutes()
    {
        // System routes.
        Route::middleware(['web'])
             ->group(__DIR__.DIRECTORY_SEPARATOR.
                     '..'.
                     DIRECTORY_SEPARATOR.
                     'Routes'.
                     DIRECTORY_SEPARATOR.
                     'galaxia.php');
    }

    protected function loadViews()
    {
        // Identify vendor/packages path.
        $base = File::exists(base_path('vendor'.
                                       DIRECTORY_SEPARATOR.
                                       'laraning'.
                                       DIRECTORY_SEPARATOR.
                                       'galaxia')) ?
                                       'vendor' : 'packages';

        $this->loadViewsFrom(
            base_path($base.
                      DIRECTORY_SEPARATOR.'laraning'.
                      DIRECTORY_SEPARATOR.'galaxia'.
                      DIRECTORY_SEPARATOR.'src'.
                      DIRECTORY_SEPARATOR.'Resources'.
                      DIRECTORY_SEPARATOR.'views'),
            'galaxia-ui'
        );
    }

    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../Resources/assets' => public_path('galaxia'),
        ], 'galaxia-ui-assets');

        $this->publishes([
            __DIR__.'/../AppFeatures/Galaxia' => app_path('Galaxia'),
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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'galaxia-text');
    }
}
