<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

$tags = web\Models\Tag::all();

/** @var $blade */
echo $blade->make('pages/tag',[
    'tags'=>$tags
])->render();