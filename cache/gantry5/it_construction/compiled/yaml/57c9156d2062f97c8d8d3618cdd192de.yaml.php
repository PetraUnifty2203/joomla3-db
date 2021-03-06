<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/particles/content-pro-joomla.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Content PRO (Joomla)',
        'description' => 'Display Joomla articles in an awesome way.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Content PRO (Joomla) particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_main' => [
                            'label' => 'Main Settings',
                            'fields' => [
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
                                'behaviour' => [
                                    'type' => 'select.select',
                                    'label' => 'Behaviour',
                                    'description' => 'Select the particle behaviour - static, slider or slideset.',
                                    'placeholder' => 'Select...',
                                    'default' => 'static',
                                    'options' => [
                                        'static' => 'Static',
                                        'slider' => 'Slider',
                                        'slideset' => 'Slideset'
                                    ]
                                ],
                                'columns' => [
                                    'type' => 'select.select',
                                    'label' => 'Items per Slide',
                                    'description' => 'Select the number of items per slide for the Slider and Slideset behaviour. This option also acts as \'Items per Row\' for the \'Static\' behavior.',
                                    'placeholder' => 'Select...',
                                    'default' => 3,
                                    'options' => [
                                        1 => 1,
                                        2 => 2,
                                        3 => 3,
                                        4 => 4,
                                        5 => 5,
                                        6 => 6,
                                        10 => 10
                                    ]
                                ],
                                'gutter' => [
                                    'type' => 'select.select',
                                    'label' => 'Gutter',
                                    'description' => 'Enable or disable the Content PRO gutter (to have space between the items or not).',
                                    'placeholder' => 'Select...',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enabled',
                                        'disabled' => 'Disabled'
                                    ]
                                ],
                                'autoplay' => [
                                    'type' => 'select.select',
                                    'label' => 'Autoplay',
                                    'description' => 'Select whether or not the Slider and Slideset items should switch automatically',
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
                                    'description' => 'Set the timespan in miliseconds between switching the slides/pages.',
                                    'default' => 7000
                                ],
                                'navigation' => [
                                    'type' => 'select.select',
                                    'label' => 'Navigation',
                                    'description' => 'Select the navigation type (Slideset ONLY).',
                                    'placeholder' => 'Select...',
                                    'default' => 'arrows',
                                    'options' => [
                                        'arrows' => 'Arrows',
                                        'dots' => 'Dots',
                                        'both' => 'Both'
                                    ]
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Select the animation type (Slideset ONLY).',
                                    'placeholder' => 'Select...',
                                    'default' => 'fade',
                                    'options' => [
                                        'fade' => 'Fade',
                                        'scale' => 'Scale',
                                        'slide-horizontal' => 'Slide-horizontal',
                                        'slide-vertical' => 'Slide-vertical',
                                        'slide-top' => 'Slide-top',
                                        'slide-bottom' => 'Slide-bottom'
                                    ]
                                ],
                                'duration' => [
                                    'type' => 'input.text',
                                    'label' => 'Animation Duration',
                                    'description' => 'Set the animation duration in miliseconds (Slideset ONLY).',
                                    'default' => 200
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
                                        'disablelink' => 'Disabled (Article Link)'
                                    ]
                                ],
                                'pullup' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Pull Up',
                                    'description' => 'If enabled, a negative \'margin-top\' will be applied to the particle. Enabling this option is recommended only when the particle is just below the slider.',
                                    'default' => 0
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
                        ],
                        '_tab_source' => [
                            'label' => 'Data Source',
                            'fields' => [
                                'article.filter.categories' => [
                                    'type' => 'joomla.categories',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the articles should be taken from.',
                                    'overridable' => false
                                ],
                                'article.filter.articles' => [
                                    'type' => 'input.text',
                                    'label' => 'Articles',
                                    'description' => 'Enter the Joomla articles that should be shown. It should be a list of article IDs separated with a comma (i.e. 1,2,3,4,5).',
                                    'overridable' => false
                                ],
                                'article.filter.featured' => [
                                    'type' => 'select.select',
                                    'label' => 'Featured Articles',
                                    'description' => 'Select how Featured articles should be filtered.',
                                    'default' => '',
                                    'options' => [
                                        'include' => 'Include Featured',
                                        'exclude' => 'Exclude Featured',
                                        'only' => 'Only Featured'
                                    ],
                                    'overridable' => false
                                ],
                                'article.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Articles',
                                    'description' => 'Enter the maximum number of articles to display.',
                                    'default' => 3,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first article).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the articles should be ordered by.',
                                    'default' => 'publish_up',
                                    'options' => [
                                        'publish_up' => 'Published Date',
                                        'created' => 'Created Date',
                                        'modified' => 'Last Modified Date',
                                        'title' => 'Title',
                                        'ordering' => 'Ordering',
                                        'hits' => 'Hits',
                                        'id' => 'ID',
                                        'alias' => 'Alias'
                                    ],
                                    'overridable' => false
                                ],
                                'article.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the articles should be ordered by.',
                                    'default' => 'ASC',
                                    'options' => [
                                        'ASC' => 'Ascending',
                                        'DESC' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_layout' => [
                            'label' => 'Article Layout',
                            'fields' => [
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if and what image of the article should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Image Height',
                                    'description' => 'Set the image height in pixels (do NOT type in \'px\', enter just the digits). If you leave this field empty the default image proportions will be used.',
                                    'pattern' => '\\d{1,4}'
                                ],
                                'article.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the article title should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show (Article Link)',
                                        'shownolink' => 'Show (No Link)',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the article title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'articledetails' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Details',
                                    'description' => 'Select if the article details should be shown (Date, Author, Category, Hits).',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show (Top)',
                                        'showbottom' => 'Show (Bottom)',
                                        'hide' => 'Hide'
                                    ]
                                ],
                                'article.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the article date should be shown.',
                                    'default' => 'published',
                                    'options' => [
                                        'created' => 'Show Created Date',
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select the preferred date format.',
                                    'default' => 'l, F d, Y',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11'
                                    ]
                                ],
                                'article.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the article author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show (Author)',
                                        'showalias' => 'Show (Alias)',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Category',
                                    'description' => 'Select if and how the article category should be shown.',
                                    'default' => 'link',
                                    'options' => [
                                        'show' => 'Show',
                                        'link' => 'Show with Link',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.hits.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Hits',
                                    'description' => 'Select if the article hits should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Text',
                                    'description' => 'Select if and how the article text should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Introduction',
                                        'full' => 'Full Article',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Text Limit',
                                    'description' => 'Type in the number of characters the article text should be limited to.',
                                    'default' => '',
                                    'pattern' => '\\d+'
                                ],
                                'article.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Formatting',
                                    'description' => 'Select the formatting you want to use to display the article text.',
                                    'default' => 'text',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'article.display.read_more.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Read More',
                                    'description' => 'Select if the article \'Read More\' button should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.read_more.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Read More Label',
                                    'description' => 'Type in the label for the \'Read More\' button.',
                                    'placeholder' => 'Read More...'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
