<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/ncpmedia/user/themes/hola/blueprints/modular/stats.yaml',
    'modified' => 1547052129,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
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
                                'stats' => [
                                    'type' => 'section',
                                    'title' => 'Statistics',
                                    'text' => 'Enter statistics Elements, icons bank: https://fontawesome.com/v4.7.0/icons/',
                                    'underline' => true,
                                    'fields' => [
                                        'header.stats' => [
                                            'type' => 'list',
                                            'label' => 'Statistics',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.statCount' => [
                                                    'type' => 'text',
                                                    'label' => 'Number'
                                                ],
                                                '.statDescription' => [
                                                    'type' => 'text',
                                                    'label' => 'Description'
                                                ],
                                                '.statIconClass' => [
                                                    'type' => 'iconpicker',
                                                    'label' => 'Custom Icon',
                                                    'description' => 'You can use classes: im-arrow-up/im-arrow-down '
                                                ],
                                                '.statIconLink' => [
                                                    'type' => 'text',
                                                    'label' => 'External Link'
                                                ],
                                                '.statHighlight' => [
                                                    'type' => 'toggle',
                                                    'highlight' => 1,
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
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
    ]
];
