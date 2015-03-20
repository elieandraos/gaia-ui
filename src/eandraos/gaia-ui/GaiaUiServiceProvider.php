<?php namespace eandraos\gaia-ui;

use Illuminate\Support\ServiceProvider;

class GaiaUiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //load the admin views and publish them under resources/views/
        $this->loadViewsFrom(__DIR__ . '/../../views', 'gaia-ui');
        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/')
        ]);
    }

}