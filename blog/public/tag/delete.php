<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

/** @var $id */

if (!isset($_GET['id'])) {
    throw new Error('не найден');
}

$tag = web\Models\Tag::find($_GET['id'] );
$tag->delete();
header('Location: /');
