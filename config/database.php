<?php
namespace config;
use PDO;

  class Database {
    private static $pdo = null;

    public static function getInstance(){
        if(!self::$pdo) {
            $dsn = "mysql:host=localhost;dbname=mabagnole";
            self::$pdo = new PDO($dsn, 'root', '',[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$pdo;  
    }
  }
?>