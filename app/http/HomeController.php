<?php

namespace App\Http;

use Illuminate\Framework\Request;
use Illuminate\Framework\Response;
use Illuminate\Framework\View;

class HomeController
{
    public function index(Request $request)
    {
        $databaseResponse = ["city" => "Banglore", "text" => "I love"];
        return View::make('welcome', $databaseResponse);
    }

    public function list(Request $request)
    {
        $data = [["city" => "Banglore"], ["city" => "Mumbai"]];

        return (new Response())->status(200)->toJSON($data);
    }
    public function show(Request $request)
    {
        dd($request->get('id'));
    }
}
