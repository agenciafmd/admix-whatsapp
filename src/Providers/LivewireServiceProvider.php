<?php

namespace Agenciafmd\Whatsapp\Providers;

use Agenciafmd\Whatsapp\Http\Livewire\WhatsappChat;
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
