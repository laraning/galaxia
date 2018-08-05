<?php

namespace Laraning\Galaxia\Providers;

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
        Route::group(['middleware' => ['web',
                                       'firewall-blacklist',
                                       'firewall-blockattacks', ]], function ($router) {
                                           $this->loadRoutesFrom(__DIR__.'/../Routes/default.php');
                                       });

        Route::group(['middleware' => ['web',
                                       'firewall-blacklist',
                                       'firewall-blockattacks', ]], function ($router) {
                                           $this->loadRoutesFrom(__DIR__.'/../Routes/custom.php');
                                       });
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'galaxia-ui');
    }

    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../Resources/assets' => public_path('galaxia'),
        ], 'galaxia-assets');

        $this->publishes([
            __DIR__.'/../Features' => app_path('Features'),
        ], 'galaxia-features');
    }

    protected function loadTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'galaxia-translations');
    }
}
