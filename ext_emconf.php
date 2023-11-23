<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Content element classes',
    'description' => 'A custom field for content element classes',
    'category' => 'be',
    'author' => 'Jan Kiesewetter',
    'author_email' => 'jan@t3easy.de',
    'author_company' => 't3easy',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'frontend' => '10.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
