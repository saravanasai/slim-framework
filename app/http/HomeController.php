<?php

namespace App\Http;

use Illuminate\Framework\Request;

class HomeController
{
    public function index(Request $request)
    {
        echo "I love Laravel";
    }

    public function show(Request $request)
    {
        dd($request->get('id'));
    }
}
