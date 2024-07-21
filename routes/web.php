<?php

use App\Http\HomeController;
use Illuminate\Framework\Route;

Route::get('/test', function () {
    echo "test route";
});

Route::get('/user/([0-9]*)',[HomeController::class, 'show'],["id"]);
Route::get('/home', [HomeController::class, 'index']);
