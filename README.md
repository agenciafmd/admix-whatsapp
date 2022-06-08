## F&MD - Whatsapp

[![Downloads](https://img.shields.io/packagist/dt/agenciafmd/admix-whatsapp.svg?style=flat-square)](https://packagist.org/packages/agenciafmd/admix-whatsapp)
[![Licença](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

- Use o Whatsapp no seu site

## Instalação

```
composer require agenciafmd/admix-whatsapp:dev-master
```

Não esqueça de publicar os assets no seu projeto com o comando 

```bash
php artisan vendor:publish --tag=admix-whatsapp:assets
```

## Dados no frontend

Após publicar os assets, acrescente a chamada do do arquivo css no head do projeto

````html
<link rel="stylesheet" href="/css/whatsapp-chat.css">
````

Para utilizar o whatsapp no seu projeto acrescente este componente no seu html

```html
<x-whatsapp></x-whatsapp>
```
 
## Customização

Caso seja necessário, é possivel a configuração do pacote no arquivo `config/analytics.php` ou das `views`

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


