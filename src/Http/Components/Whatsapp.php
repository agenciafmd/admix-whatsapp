<?php

namespace Agenciafmd\Whatsapp\Http\Components;

use Illuminate\View\Component;

class Whatsapp extends Component
{
    public string $template;

    public string $locale;

    public string $message = '';

    public string $pageName = '';

    public string $pageUrl = '';

    public function __construct(
        string $template = 'agenciafmd/whatsapp::components.whatsapp-chat', string $message = 'Gostaria de obter mais informações.', string $pageName = '', string $pageUrl = ''
    )
    {
        $locales = [
            'pt' => 'pt_BR',
            'en' => 'en_US',
            'es' => 'es_ES',
        ];

        $segment = (array_key_exists(request()->segment(1),$locales)) ? request()->segment(1) : 'pt';

        $this->locale = $locales[$segment];

        $this->template = $template;

        $this->message = $message;

        $this->pageName = $pageName;

        $this->pageUrl = $pageUrl;
    }

    public function render()
    {
       return view($this->template);
    }
}
