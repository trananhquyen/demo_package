<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            base_path(). '/resources/views/laraveldaily/timezones' => __DIR__.'/views',
        ]);
    }
}
