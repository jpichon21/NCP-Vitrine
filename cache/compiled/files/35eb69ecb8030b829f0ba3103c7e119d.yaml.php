<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/ncpmedia/user/themes/hola/blueprints/modular/basic.yaml',
    'modified' => 1547052129,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.smallTitle' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Small Upper Title'
                                ]
                            ]
                        ],
                        'holaSetings' => [
                            'type' => 'tab',
                            'title' => 'Hola Settings',
                            'fields' => [
                                'background' => [
                                    'type' => 'section',
                                    'title' => 'Section Background Color',
                                    'underline' => true
                                ],
                                'header.sectionBackground' => [
                                    'type' => 'selectize',
                                    'label' => 'Additional Section Background Class',
                                    'description' => 'For Gray Background Please Use Class \'grey-section\' for White Background leave field empty.'
                                ],
                                'leftText' => [
                                    'type' => 'section',
                                    'title' => 'Text Section',
                                    'underline' => true,
                                    'fields' => [
                                        'header.row' => [
                                            'type' => 'list',
                                            'label' => 'Text Row',
                                            'fields' => [
                                                '.firstColumnTitle' => [
                                                    'type' => 'text',
                                                    'label' => 'First Column Title'
                                                ],
                                                '.firstColumnContent' => [
                                                    'type' => 'textarea',
                                                    'label' => 'First Column Content',
                                                    'description' => 'If using only one column please leave second column fields empty.'
                                                ],
                                                '.secondColumnTitle' => [
                                                    'type' => 'text',
                                                    'label' => 'Second Column Title'
                                                ],
                                                '.secondColumnContent' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Second Column Content'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
