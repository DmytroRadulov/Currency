<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

/** @var $id */
/** @var $blade */
/** @var $categories */

if (!isset($_GET['id'])) {
    throw new Error('не найден');
}
$category = web\Models\Category::find($_GET['id']);
foreach ($category->posts as $post) {
    $post->delete();
}
$category->delete();
header('Location: /');
