<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet;
use Illuminate\Support\ServiceProvider;

class FruadnetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       // $this->app->make('Monowarfs\Fraudnet\Fraudnet');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/fraudnet.php' => config_path('fraudnet.php')
        ]);
    }
}
