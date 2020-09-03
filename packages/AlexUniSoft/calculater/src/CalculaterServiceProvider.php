<?php

namespace AlexUniSoft\Calculater;

use Illuminate\Support\ServiceProvider;

class CalculaterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('AlexUniSoft\Calculater\CalculaterController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
