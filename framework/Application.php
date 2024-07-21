<?php

namespace Illuminate\Framework;

ini_set('display_errors', 1);

use \PDO;
use PDOException;

class Application
{
    public static $Db;

    public static $viewDirectory;

    public function  __construct($servername, $dbname, $username, $password)
    {

        $defaults = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

        try {
            static::$Db =  new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $defaults);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function DB(): \PDO
    {
        return static::$Db;
    }

    public function loadRoutePaths(string $directory): self
    {
        include_once $directory;

        return $this;
    }

    public function loadViewPaths(string $directory): self
    {
        static::$viewDirectory = $directory;

        return $this;
    }
}
