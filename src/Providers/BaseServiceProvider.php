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

        $this->loadTranslations();

        $this->publishAssets();

        $this->publishRoutes();

        $this->publishConfiguration();

        $this->publishMigrations();
    }

    public function register()
    {
        app('router')->aliasMiddleware('firewall-blacklist', \PragmaRX\Firewall\Middleware\FirewallBlacklist::class);
        app('router')->aliasMiddleware('firewall-blockattacks', \PragmaRX\Firewall\Middleware\BlockAttacks::class);
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
        $this->mergeConfigFrom(__DIR__.'/../Configuration/flame.php', 'flame');
    }

    protected function loadRoutes()
    {
        // Custom routes.
        if (File::exists(base_path('routes' . DIRECTORY_SEPARATOR . 'galaxia.php'))) {
            Route::group(['middleware' => ['web',
                                       'firewall-blacklist',
                                       'firewall-blockattacks', ]], function ($router) {
                                           $this->loadRoutesFrom(base_path('routes' . DIRECTORY_SEPARATOR . 'galaxia.php'));
                                       });
        };

        // System routes. Always loaded.
        Route::group(['middleware' => ['web',
                                   'firewall-blacklist',
                                   'firewall-blockattacks', ]], function ($router) {
                                       $this->loadRoutesFrom(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Routes' . DIRECTORY_SEPARATOR . 'system.php');
                                   });
    }

    protected function loadViews()
    {
        // Identify vendor/packages path.
        $base = File::exists(base_path('vendor'.DIRECTORY_SEPARATOR.'laraning'.DIRECTORY_SEPARATOR.'galaxia')) ?
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
            __DIR__.'/../Stubs/Galaxia' => app_path('Galaxia'),
        ], 'galaxia-features');
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
