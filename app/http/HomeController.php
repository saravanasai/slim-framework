<?php

namespace App\Http;

class HomeController
{
    public function index($variables)
    {
        echo "I love Laravel";
    }

    public function show($variables)
    {
        var_dump($variables);
    }
}
