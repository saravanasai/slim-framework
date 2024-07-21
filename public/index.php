<?php

use Illuminate\Framework\Application;

require_once (__DIR__) . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$app = new Application();


echo "App Mode : " . $_ENV['APP_MODE'];
