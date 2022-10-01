<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

$tag = new web\Models\Tag();
if (isset($_POST['title']) && isset($_POST['slug'])) {
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location: /');
}

/** @var $blade */
echo $blade->make('pages/tag_form', [
    'tag' => $tag
])->render();
