<?php

namespace Wgc\NovaSite;

use Illuminate\Support\ServiceProvider;

class NovaSiteSerivceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'NovaSite');
        $this->publishes([
            __DIR__ . '/Config/nova_site.php' => config_path('nova_site.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/nova_site.php',
            'nova_site'
        );
    }
}
