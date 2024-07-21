<?php

namespace Illuminate\Framework;

ini_set('display_errors', 1);
class Application
{

    public array $configs;
    public function __construct(array $configs=[])
    {
        $this->configs = $configs;
    }

    
   
}
