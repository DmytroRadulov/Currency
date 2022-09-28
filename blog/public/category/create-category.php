<?php

use blog\src\Models\Category;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';
require_once __DIR__ . '/../../src/Models/Category.php';
require_once __DIR__ . '/../../src/Models/Post.php';
require_once __DIR__ . '/../../src/Models/Tag.php';

$category = new Category();
if (isset($_POST['title']) && isset($_POST['slug'])) {
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: /');
}

/** @var $blade */
echo $blade->make('pages/form',[
    'category'=> $category
])->render();