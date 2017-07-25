<?php

namespace CheweiHu\LaravelAdminLTELang;

use Illuminate\Support\ServiceProvider;

class LaravelAdminLTELangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->loadTranslationsFrom(__DIR__.'/src/lang', 'chewei05');

		$this->publishes([
			__DIR__.'/lang' => resource_path('lang/vendor/adminlte'),
		]);
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
