<?php

namespace Illuminate\Framework;

class View
{
    public static ?View  $instance = null;
    public  $viewString;

    private function __construct(string $view, array $data = [])
    {

        ob_start();

        extract($data);

        include  __DIR__."/../views/{$view}.php";

        $this->viewString = ob_get_clean();

        $this->resolve();
    }


    public static function make(string $view, mixed $params=[])
    {
        if (self::$instance == null) {

            return new self($view, $params);
        }

        return self::$instance;
    }

    public  function resolve()
    {
        print_r($this->viewString);
    }
}
