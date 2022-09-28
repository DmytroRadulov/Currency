<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../src/Models/Category.php';
require_once __DIR__ . '/../src/Models/Post.php';
require_once __DIR__ . '/../src/Models/Tag.php';

/** @var $blade */

echo $blade->make('pages/index')->render();
