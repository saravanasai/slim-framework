<?php

use Illuminate\Framework\Application;

require_once (__DIR__) . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$app = (new Application(
    $_SERVER['SERVER_NAME'],
    $_SERVER['DB_NAME'],
    $_SERVER['DB_USERNAME'],
    $_SERVER['DB_PASSWORD']
))->loadRoutePaths(__DIR__ . "/../routes/web.php")
    ->loadViewPaths(__DIR__ . "/../views");
