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
    'pt_BR' => [
        'phonenumber' => '5599999999999',
        'text' => 'Olá, bem-vindo(a).
                Por favor, informe seus dados e atenderemos o mais rápido possível!',
        'atendent' => 'Atendente 01',
        'occupation' => 'Atendimento - F&MD',
    ],
    'es_ES' => [
        'phonenumber' => '5599999999999',
        'text' => 'Hola bienvenido.
                ¡Déjanos tus datos y te responderemos lo antes posible!',
        'atendent' => 'Asistente 01',
        'occupation' => 'Asistencia - F&MD',
    ],
    'en_US' => [
        'phonenumber' => '5599999999999',
        'text' => 'Hello, welcome.
                Please provide your details and we will respond as soon as possible!',
        'atendent' => 'Attendant 01',
        'occupation' => 'Attendance - F&MD',
    ]
];
