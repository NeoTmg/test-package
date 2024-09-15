<?php

namespace Neo\TestPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        // You can register routes, views, migrations, etc.
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php'); 
        $this->publishes([
            __DIR__.'/../config/testpackage.php' => config_path('testpackage.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register config, commands, or bindings
        $this->mergeConfigFrom(__DIR__.'/../config/testpackage.php', 'testpackage');
    }
}
