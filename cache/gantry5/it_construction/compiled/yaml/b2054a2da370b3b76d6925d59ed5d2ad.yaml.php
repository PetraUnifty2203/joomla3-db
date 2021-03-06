<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/modal-search.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Modal Search',
        'description' => 'Display modal search.',
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
                    'description' => 'Globally enable spacer.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong><br /><br />Displays modal search in your layout.<br />This particle is designed to be used in the Menu only.<br /><br /><strong>Joomla:</strong> Go to the Module Manager and make sure your Search module is published in the "<strong>modal-search</strong>" position.<br /><br /><strong>Grav CMS:</strong> Make sure you have installed the <a href="https://github.com/getgrav/grav-plugin-simplesearch" target="_blank"><strong>SimpleSearch</strong></a> plugin.'
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select the style which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'style1',
                    'options' => [
                        'style1' => 'Style 1',
                        'style2' => 'Style 2'
                    ]
                ]
            ]
        ]
    ]
];
