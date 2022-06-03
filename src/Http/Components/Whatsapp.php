<?php

namespace Agenciafmd\Whatsapps\Http\Components;

use Agenciafmd\Whatsapps\Models\Whatsapp as WhatsappModel;
use Illuminate\View\Component;

class Whatsapp extends Component
{
    public string $template;

    public function __construct(
        string $template = 'agenciafmd/whatsapps::components.whatsapp-chat'
    )
    {
        $this->template = $template;
    }

    public function render()
    {
       $view = [];

        return view($this->template, $view);
    }
}