<?php

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

$app = new App\Core\Route;
$app->start();

