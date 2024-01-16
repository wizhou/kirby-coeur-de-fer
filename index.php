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
        'blocks/heading' => __DIR__ . '/blueprints/heading.yml',
        'fields/margins' => __DIR__ . '/blueprints/fields/margins.yml',
        'fields/text-align' => __DIR__ . '/blueprints/fields/text-align.yml',
        'fields/text-transform' => __DIR__ . '/blueprints/fields/text-transform.yml'
    ]
]);
