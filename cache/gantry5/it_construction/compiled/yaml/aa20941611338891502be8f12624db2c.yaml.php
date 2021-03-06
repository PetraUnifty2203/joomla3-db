<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/particles/feedback2.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Feedback 2',
        'description' => 'Display feedback.',
        'type' => 'particle',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Feedback 2 particles.',
                    'default' => true
                ],
                'mainheading' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title.',
                    'placeholder' => 'Enter Title',
                    'default' => ''
                ],
                'introtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Intro Text',
                    'description' => 'Type in the intro text.',
                    'placeholder' => 'Enter Intro Text',
                    'default' => ''
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Items per Row',
                    'description' => 'Select the number of items per row.',
                    'placeholder' => 'Select...',
                    'default' => 2,
                    'options' => [
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5
                    ]
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Feedback 2 Items',
                    'description' => 'Create each feedback item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.feedback' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Feedback',
                            'description' => 'Type in the feedback text.'
                        ],
                        '.customername' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'description' => 'Type in the name of the person who provided the feedback.'
                        ],
                        '.position' => [
                            'type' => 'input.text',
                            'label' => 'Position',
                            'description' => 'Type in the position of the person who provided the feedback.'
                        ],
                        '.company' => [
                            'type' => 'input.text',
                            'label' => 'Company',
                            'description' => 'Type in the company of the person who provided the feedback.'
                        ],
                        '.companylink' => [
                            'type' => 'input.text',
                            'label' => 'Company Link',
                            'description' => 'Type in the link to the company website.'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_parent',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the image of the person who provided the feedback.'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag Attributes',
                            'description' => 'Extra Tag attributes.',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'id',
                                1 => 'class'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
