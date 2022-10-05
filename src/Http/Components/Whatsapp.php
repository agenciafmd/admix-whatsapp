<?php

namespace Agenciafmd\Whatsapp\Http\Components;

use Illuminate\View\Component;

class Whatsapp extends Component
{
    public string $template;

    public string $locale;

    public function __construct(
        string $template = 'agenciafmd/whatsapp::components.whatsapp-chat'
    )
    {
        $locales = [
            'pt' => 'pt_BR',
            'en' => 'en_US',
            'es' => 'es_ES',
        ];

        $segment = (array_key_exists(request()->segment(1),$locales)) ?: 'pt';

        $this->locale = $locales[$segment];

        $this->template = $template;
    }

    public function render()
    {
       return view($this->template);
    }
}
