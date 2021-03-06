<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/particles/social-search.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Social/Search',
        'description' => 'Display social, search and offcanvas buttons.',
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
                    'description' => 'Globally enable Social/Search particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong><br /><br />Displays social, search and offcanvas buttons in your layout.<br />This particle is designed to be used in the Menu only, in the Construction template.<br /><br /><strong>Joomla:</strong> Go to the Module Manager and make sure your Search module is published in the "<strong>modal-search</strong>" position.<br /><br />Once you enable <strong>"Offcanvas Toggle"</strong>, it hides the original toggle button.'
                ],
                'display' => [
                    'type' => 'container.set',
                    'label' => 'Enable',
                    'fields' => [
                        '.social' => [
                            'type' => 'enable.enable',
                            'label' => 'Social Icons',
                            'default' => 1
                        ],
                        '.search' => [
                            'type' => 'enable.enable',
                            'label' => 'Search Icon',
                            'default' => 1
                        ],
                        '.offcanvas' => [
                            'type' => 'enable.enable',
                            'label' => 'Offcanvas Toggle',
                            'default' => 0
                        ]
                    ]
                ],
                'social' => [
                    'type' => 'container.set',
                    'label' => 'Social Icons',
                    'fields' => [
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when social icon is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_blank',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.items' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Social Items',
                            'description' => 'Create each social item to display.',
                            'value' => 'name',
                            'ajax' => true,
                            'fields' => [
                                '.icon' => [
                                    'type' => 'input.icon',
                                    'label' => 'Icon'
                                ],
                                '.link' => [
                                    'type' => 'input.text',
                                    'label' => 'Link'
                                ],
                                '.tooltip' => [
                                    'type' => 'input.text',
                                    'label' => 'Tooltip Text'
                                ],
                                '.class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Class'
                                ]
                            ]
                        ]
                    ]
                ],
                'search' => [
                    'type' => 'container.set',
                    'label' => 'Search Icon',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the Search button.',
                            'default' => 'fa fa-search'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text',
                            'description' => 'Type in the tooltip text for the Search button.',
                            'placeholder' => 'Search'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'type' => 'container.set',
                    'label' => 'Offcanvas Toggle',
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon',
                            'description' => 'Select the icon for the Offcanvas Toggle button.',
                            'default' => 'fa fa-bars'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Tooltip Text',
                            'description' => 'Type in the tooltip text for the Offcanvas Toggle button.',
                            'placeholder' => 'Offcanvas'
                        ]
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
                ]
            ]
        ]
    ]
];
