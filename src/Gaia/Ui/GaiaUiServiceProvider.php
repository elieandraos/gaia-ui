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
        //publish the admin views and publish them under resources/views/admin/*
        $this->loadViewsFrom(__DIR__ .'/../../views', 'gaia-ui');
        $this->publishes([ __DIR__ .'/../../views' => base_path('resources/views/') ]);
        //publish the database migrations and seeds
        $this->publishes([ __DIR__ .'/../../database' => base_path('database/') ]);
        //load assets
        $this->publishes([ __DIR__ .'/../../assets' => public_path() ], 'public');
        //include the routes
        include __DIR__.'/../../routes.php';
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
       
    }

}