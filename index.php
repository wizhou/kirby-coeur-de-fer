<?php

Kirby::plugin('wizhou/kirby-coeur-de-fer', [
    'snippets' => [
        'blocks/rule' => __DIR__ . '/snippets/rule.php',
        'blocks/lead' => __DIR__ . '/snippets/lead.php',
        'blocks/heading' => __DIR__ . '/snippets/heading.php'
    ],
    'blueprints' => [
        'blocks/rule' => __DIR__ . '/blueprints/rule.yml',
        'blocks/lead' => __DIR__ . '/blueprints/lead.yml',
        'blocks/heading' => __DIR__ . '/blueprints/heading.yml'
    ]
]);
