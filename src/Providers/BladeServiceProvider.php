<?php

namespace Agenciafmd\Whatsapp\Providers;

use Agenciafmd\Whatsapp\Http\Components\Whatsapp;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadBladeComponents();

        $this->loadViews();

        $this->loadTranslations();

        $this->publish();
    }

    protected function loadBladeComponents()
    {
        Blade::component('whatsapp', Whatsapp::class);
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'agenciafmd/whatsapp');
    }

    protected function loadTranslations()
    {
        $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/lang');
    }

    protected function publish()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/agenciafmd/whatsapp'),
        ], 'admix-whatsapp:views');
    }
}
