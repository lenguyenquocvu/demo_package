<?php

namespace Home\Display;

use Illuminate\Support\ServiceProvider;

class DisplayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'display');
		$this->publishes([
			__DIR__.'/public' => public_path('homes'),
		], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
