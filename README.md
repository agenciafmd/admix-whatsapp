## F&MD - Whatsapp Chat

[![Downloads](https://img.shields.io/packagist/dt/agenciafmd/admix-whatsapp.svg?style=flat-square)](https://packagist.org/packages/agenciafmd/admix-whatsapp)
[![Licença](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

- Use o chat flutuante do Whatsapp no seu site

## Instalação

```
composer require agenciafmd/admix-whatsapp:dev-master
```

Não esqueça de publicar os assets no seu projeto com o comando 

```bash
php artisan vendor:publish --tag=admix-whatsapp:assets
```

## Dados no frontend

Após publicar os assets, acrescente as chamadas de:

#### CSS

````html
<link rel="stylesheet" href="/css/whatsapp-chat.css">
````

#### Javascript

```html
<script src="/js/whatsapp-chat.js"></script>
````

#### Componente

```html
<x-whatsapp></x-whatsapp>
```
 
## Customização

Caso seja necessário, é possivel a configuração do pacote no arquivo `config/admix-whatsapp.php` ou das `views`

Para isso, publique o arquivo com o comando abaixo:

```bash
php artisan vendor:publish --tag="admix-whatsapp:config"
```
No arquivo de config é possivel alterar os textos da janela e o número de whatsapp

```php
    'fields' => [
      'name' => true,
      'email' => false,
      'cpf' => true,
      'phone' => true,
      'newsletter' => true,
    ],
    'phonenumber' => '5599999999999',
    'text' => 'Olá, bem-vindo(a).
            Por favor, informe seus dados e atenderemos o mais rápido possível!',
    'atendent' => 'Atendente 01',
    'occupation' => 'Atendimento - F&MD',
```

Neste arquivo é possivel habilitar e desabilitar os campos conforme for necessário

### Customizar variáveis de CSS
Os valores das variáveis podem ser sobrescritos normalmente nos arquivos de estilo do projeto.
```css
--wa-chat-dark-green: #2B6056;
--wa-chat-green: #128C7E;
--wa-chat-light-green: #25D366;
--wa-chat-light: #DCF8C7;
--wa-chat-white: #F9F9F9;
--wa-chat-red: #DC1C2A;

--wa-chat-font-family: sans-serif;
--wa-chat-max-width: 27.5rem;
--wa-chat-box-shadow: 0 0.5rem 1.5rem -0.25rem rgba(0, 0, 0, 0.15);
--wa-chat-border-radius: .5rem;
--wa-chat-z-index: 1030;

--wa-chat-button-size: 3.5rem;
--wa-chat-button-color: var(--wa-chat-light-green);
--wa-chat-button-icon-size: 1.5rem;
--wa-chat-button-distance-x: 1rem;
--wa-chat-button-distance-y: 1rem;

--wa-chat-window-margin-bottom: calc(var(--wa-chat-button-size) + var(--wa-chat-button-distance-y) + 1rem);

--wa-chat-header-padding-x: 1.25rem;
--wa-chat-header-padding-y: 0.625rem;
--wa-chat-header-padding: var(--wa-chat-header-padding-y) var(--wa-chat-header-padding-x);
--wa-chat-contact-img-size: 2.5rem;
--wa-chat-close-size: 1.75rem;

--wa-chat-body-color: #000;
--wa-chat-body-padding-x: 1rem;
--wa-chat-body-padding-y: 1rem;
--wa-chat-body-padding: var(--wa-chat-body-padding-y) var(--wa-chat-body-padding-x);
--wa-chat-placeholder-color: #757575;
--wa-chat-placeholder-color-hover: #414141;

--wa-chat-btn-border-radius: .25rem;
```
