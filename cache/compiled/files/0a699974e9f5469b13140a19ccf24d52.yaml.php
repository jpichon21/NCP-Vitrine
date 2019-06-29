<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ncpmultiyr/www/user/config/plugins/email.yaml',
    'modified' => 1547823244,
    'data' => [
        'enabled' => true,
        'from' => 'ncpmedia21@gmail.com',
        'to' => 'ncpmedia21@gmail.com',
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
