<?php

return [
    'name' => 'Whatsapp',
    'icon' => 'icon fe-file-text',
    'sort' => 20,
    'default_sort' => [
        '-is_active',
        'name',
    ],
    'fields' => [
      'name' => true,
      'email' => true,
      'cpf' => false,
      'phone' => true,
      'newsletter' => true,
    ],
    'phonenumber' => '5599999999999',
    'text' => 'Olá, bem-vindo(a).
            Por favor, informe seus dados e atenderemos o mais rápido possível!',
    'atendent' => 'Atendente 01',
    'occupation' => 'Atendimento - F&MD',

];
