<?php namespace Gaia\Ui;

use Illuminate\Support\ServiceProvider;

class GaiaUiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //load the admin views and publish them under resources/views/admin/*
        $this->loadViewsFrom(__DIR__ . '/../../views', 'gaia-ui');
        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/')
        ]);
    }

}