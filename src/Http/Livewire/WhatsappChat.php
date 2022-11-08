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

    public $generic;

    public $pageLocale;

    public $pageName = null;

    public $pageUrl = null;

    public $message = null;

    public $newsletter = null;

    public function mount(string $pageLocale, string $message, string $pageName, string $pageUrl)
    {
        $this->pageLocale = $pageLocale;
        $this->message = $message;
        $this->pageName = $pageName;
        $this->pageUrl = $pageUrl;
    }

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
        $rules = [];

        if (config('admix-whatsapp.fields.name')) {
            $rules['name'] = [
                'required',
                'min:6',
            ];
        }

        if (config('admix-whatsapp.fields.email')) {
            $rules['email'] = [
                'required',
                'email',
            ];
        }

        if (config('admix-whatsapp.fields.cpf')) {
            $rules['cpf'] = [
                'required',
                'cpf',
            ];
        }

        if (config('admix-whatsapp.fields.phone')) {
            $rules['phone'] = [
                'required',
                'min:14',
            ];
        }

        if (config('admix-whatsapp.fields.newsletter')) {
            $rules['newsletter'] = [
                'accepted',
            ];
        }

        if (config('admix-whatsapp.'.$this->pageLocale.'.generic')) {
            $rules['generic'] = [
                'required',
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'cpf' => 'cpf',
            'phone' => 'telefone',
            'generic' => 'campo',
            'newsletter' => 'ofertas e notícias',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        $data['newsletter'] = (array_key_exists('newsletter', $data)) ? 'Sim' : 'Não';

        $name = (array_key_exists('name', $data)) ? $data['name'] : null;
        $email = (array_key_exists('email', $data)) ? $data['email'] : null;
        $phone = (array_key_exists('phone', $data)) ? $data['phone'] : null;
        $cpf = (array_key_exists('cpf', $data)) ? $data['cpf'] : null;
        $generic = (array_key_exists('generic', $data)) ? $data['generic'] : null;
        $description = (config('admix-whatsapp.'.$this->pageLocale.'.generic')) ? config('admix-whatsapp.'.$this->pageLocale.'.generic_name_field').': ' . $generic. "\n" : "";


        Lead::create([
            'source' => "whatsapp",
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'description' => $description .
                "CPF: " . $cpf .
                "\nReceber ofertas e notícias: " . $data['newsletter'] .
                "\nutm_campaign: " . Cookie::get('utm_campaign', '') .
                "\nutm_content: " . Cookie::get('utm_content', '') .
                "\nutm_medium: " . Cookie::get('utm_medium', '') .
                "\nutm_source: " . Cookie::get('utm_source', '') .
                "\nutm_term: " . Cookie::get('utm_term', '') .
                "\ngclid: " . Cookie::get('gclid', '') .
                "\ncid: " . Cookie::get('cid', '') .
                "\npagina: " . $this->pageUrl .
                "\norigem: " . $this->pageName,
        ]);

        $this->emit('swal', [
            'level' => 'success',
            'message' => __('Recebemos seu contato e retornaremos o quanto antes.'),
        ]);

        $this->emit('datalayer', [
            'form_name' => 'whatsapp',
        ]);

        $whatsappMessage = ($this->message) ? 'Olá! Me chamo '.$data["name"] .'. '. $this->message : 'Olá! Me chamo '.$data["name"]. '. Gostaria de obter mais informações.';

        $this->emit('whatsappUrl', [
            'url' => 'https://api.whatsapp.com/send?phone='.config('admix-whatsapp.'.$this->pageLocale.'.phonenumber').'&text='.$whatsappMessage,
        ]);

        $this->dispatchBrowserEvent('whatsappChatSubmitted',[ 'response' => true]);

        $this->resetExcept('pageLocale');
    }
}
