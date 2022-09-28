<?php

use blog\src\Models\Tag;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';
require_once __DIR__ . '/../../src/Models/Category.php';
require_once __DIR__ . '/../../src/Models/Post.php';
require_once __DIR__ . '/../../src/Models/Tag.php';
/** @var $id */

if (!isset($_GET['id'])) {
    throw new Error('не найден');
}

$tag = blog\src\Models\Tag::find($_GET['id'] );
$tag->delete();
header('Location: /');
