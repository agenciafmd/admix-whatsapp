<?php

namespace Agenciafmd\Whatsapps\Providers;

use Agenciafmd\Whatsapps\Http\Livewire\WhatsappChat;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('frontend::whatsapp-chat', WhatsappChat::class);
    }

    public function register()
    {
        //
    }
}
