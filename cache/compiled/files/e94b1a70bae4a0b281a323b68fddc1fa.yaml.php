<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ncpmultiyr/www/user/config/site.yaml',
    'modified' => 1547728657,
    'data' => [
        'title' => 'Services Digitaux sur Dijon et Lyon',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Julien Pichon',
            'email' => 'ncpmedia21@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
