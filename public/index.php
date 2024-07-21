<?php

use Illuminate\Framework\Application;

require_once (__DIR__) . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$app = (new Application())->loadRoutePaths(__DIR__ . "/../routes/web.php");


