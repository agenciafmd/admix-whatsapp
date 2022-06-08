<?php

namespace Agenciafmd\Whatsapp\Providers;

use Illuminate\Support\ServiceProvider;

class WhatsappServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->providers();

        $this->publish();
    }

    public function register()
    {
        $this->loadConfigs();
    }

    protected function providers()
    {
        $this->app->register(BladeServiceProvider::class);
        $this->app->register(LivewireServiceProvider::class);
    }

    protected function publish()
    {
        $this->publishes([
            __DIR__ . '/../config/admix-whatsapp.php' => config_path('admix-whatsapp.php'),
        ], 'admix-whatsapp:config');

        $this->publishes([
            __DIR__ . '/public/images' => public_path('images'),
            __DIR__ . '/public/css' => public_path('css'),
            __DIR__ . '/public/js' => public_path('js'),
        ], 'admix-whatsapp:assets');
    }

    protected function loadConfigs()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/admix-whatsapp.php', 'admix-whatsapp');
    }
}
