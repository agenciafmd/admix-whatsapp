<?php

namespace Agenciafmd\Whatsapp\Http\Livewire;

use Agenciafmd\Leads\Models\Lead;
use Agenciafmd\Postal\Notifications\SendNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;
use Livewire\Component;

class WhatsappChat extends Component
{
    public $name;

    public $cpf;
    
    public $email;

    public $phone;

    public $newsletter = null;

    public function render()
    {
        $view = [];

        return view('agenciafmd/whatsapp::livewire.whatsapp-chat',$view);
    }

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules(), [], $this->attributes());
    }

    public function rules()
    {
        return [
            'name' => [
                Rule::requiredIf(config('admix-whatsapp.fields.name')),
                'min:6',
            ],
            'email' => [
                Rule::requiredIf(config('admix-whatsapp.fields.email')),
                'email',
            ],
            'cpf' => [
                Rule::requiredIf(config('admix-whatsapp.fields.cpf')),
                'cpf',
            ],
            'phone' => [
                Rule::requiredIf(config('admix-whatsapp.fields.phone')),
                'min:14',
            ],
            'newsletter' => [
                Rule::requiredIf(config('admix-whatsapp.fields.newsletter')) ? 'accepted' : '',
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'cpf' => 'cpf',
            'phone' => 'telefone',
            'newsletter' => 'ofertas e notícias',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        $data['newsletter'] = ($data['newsletter']) ? 'Sim' : 'Não';

        $name = (array_key_exists('name', $data)) ? $data['name'] : null;
        $email = (array_key_exists('email', $data)) ? $data['email'] : null;
        $phone = (array_key_exists('phone', $data)) ? $data['phone'] : null;
        $cpf = (array_key_exists('cpf', $data)) ? $data['cpf'] : null;

        Lead::create([
            'source' => "whatsapp",
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'description' => 'CPF: ' . $cpf .
                "\nReceber ofertas e notícias: " . $data['newsletter'] .
                "\nutm_campaign: " . Cookie::get('utm_campaign', '') .
                "\nutm_content: " . Cookie::get('utm_content', '') .
                "\nutm_medium: " . Cookie::get('utm_medium', '') .
                "\nutm_source: " . Cookie::get('utm_source', '') .
                "\nutm_term: " . Cookie::get('utm_term', '') .
                "\ngclid: " . Cookie::get('gclid', '') .
                "\ncid: " . Cookie::get('cid', ''),
        ]);

        $this->emit('swal', [
            'level' => 'success',
            'message' => 'Recebemos seu contato e retornaremos o quanto antes.',
        ]);

        $this->emit('datalayer', [
            'form_name' => 'whatsapp',
        ]);

        $this->dispatchBrowserEvent('whatsappChatSubmitted',[ 'response' => true]);

        $this->reset();
    }
}
