<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ncpmultiyr/www/user/plugins/email/email.yaml',
    'modified' => 1547823299,
    'data' => [
        'enabled' => true,
        'from' => 'ncpmedia21@gmail.com',
        'from_name' => NULL,
        'to' => 'ncpmedia21@gmail.com',
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
