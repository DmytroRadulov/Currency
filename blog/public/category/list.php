<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';
require_once __DIR__ . '/../../src/Models/Category.php';

$categories = blog\src\Models\Category::all();

/** @var $blade */
echo $blade->make('pages/category', [
    'categories' => $categories,
])->render();

