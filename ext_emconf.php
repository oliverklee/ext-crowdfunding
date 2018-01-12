<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Crowdfunding',
    'description' => 'Extension for conducting crowdfunding campaigns',
    'category' => 'plugin',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'author_company' => 'oliverklee.de',
    'state' => 'alpha',
    'version' => '1.0.x-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '8.7.0-8.7.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OliverKlee\\Crowdfunding\\' => 'Classes/',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'OliverKlee\\Crowdfunding\\Tests\\' => 'Tests/',
        ],
    ],
];
