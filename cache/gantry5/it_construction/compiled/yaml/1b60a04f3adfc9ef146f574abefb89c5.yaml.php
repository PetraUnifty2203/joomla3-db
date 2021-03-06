<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/particles/3d-slider.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => '3D Slider',
        'description' => 'Display a 3D Slider.',
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
                    'description' => 'Globally enable 3D Slider particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
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
                'theme' => [
                    'type' => 'select.select',
                    'label' => 'Theme',
                    'description' => 'Select the theme which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'carousel',
                    'options' => [
                        'carousel' => 'Carousel',
                        'coverflow' => 'Coverflow',
                        'cube' => 'Cube'
                    ]
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select the style which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'style1',
                    'options' => [
                        'style1' => 'Style 1',
                        'style2' => 'Style 2',
                        'style3' => 'Style 3'
                    ]
                ],
                'start' => [
                    'type' => 'input.text',
                    'label' => 'Start At',
                    'description' => 'Enter a number specifying which item the slider should start at (the default is \'3\'). This option allows you to have items in both left and right of the main/active item.',
                    'default' => 3
                ],
                'loopslider' => [
                    'type' => 'select.select',
                    'label' => 'Loop',
                    'description' => 'Select whether or not the slider should loop (to slide back to the first item when the last one is reached).',
                    'placeholder' => 'Select...',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Select whether or not the slider items should switch automatically',
                    'placeholder' => 'Select...',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'autoplayInterval' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Interval',
                    'description' => 'Set the timespan in miliseconds between switching the slider items.',
                    'default' => 7000
                ],
                'navigation' => [
                    'type' => 'select.select',
                    'label' => 'Navigation',
                    'description' => 'Select the navigation type.',
                    'placeholder' => 'Select...',
                    'default' => 'arrows',
                    'options' => [
                        'arrows' => 'Arrows',
                        'arrows-bottom' => 'Arrows (Bottom)',
                        'none' => 'None'
                    ]
                ],
                'lightbox' => [
                    'type' => 'select.select',
                    'label' => 'Lightbox',
                    'description' => 'Enable or disable the image lightbox/popup.',
                    'placeholder' => 'Select...',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled',
                        'disablelink' => 'Disabled (Item Link)'
                    ]
                ],
                'dateposition' => [
                    'type' => 'select.select',
                    'label' => 'Date Position',
                    'description' => 'Select where the \'Date\' should be shown (\'Style 1\' ONLY).',
                    'placeholder' => 'Select...',
                    'default' => 'top',
                    'options' => [
                        'top' => 'Top (Over the Image)',
                        'bottom' => 'Bottom'
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
                    'label' => '3D Slider Items',
                    'description' => 'Create each item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
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
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.date' => [
                            'type' => 'input.text',
                            'label' => 'Date',
                            'description' => 'Enter the date that you want to be associated with this item. The field is mostly used as a \'Published Date\'. Being able to type in the date manually gives you a great flexibility as you can show the exact format you want.'
                        ],
                        '.specialtext' => [
                            'type' => 'input.text',
                            'label' => 'Special Text'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Special Icon',
                            'description' => 'Choose an icon to be placed in front of \'Special Text\'.'
                        ],
                        '.bottomlink' => [
                            'type' => 'input.text',
                            'label' => 'Bottom Link',
                            'description' => 'Enter the clickable text you want to be shown. The link is the URL you enter in the \'Title Link\' field above.'
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
