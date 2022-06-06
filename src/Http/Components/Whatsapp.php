<?php

namespace Agenciafmd\Whatsapp\Http\Components;

use Illuminate\View\Component;

class Whatsapp extends Component
{
    public string $template;

    public function __construct(
        string $template = 'agenciafmd/whatsapp::components.whatsapp-chat'
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
