<?php

use App\Http\HomeController;
use Illuminate\Framework\Route;

Route::get('/test', function () {
    echo "test route";
});

Route::get('/api',[HomeController::class,'list']);

Route::get('/user/([0-9]*)',[HomeController::class, 'show'],["id"]);
Route::get('/home', [HomeController::class, 'index']);
