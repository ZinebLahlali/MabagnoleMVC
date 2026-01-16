<?php
  namespace app\models;
  use config\database;

  abstract class BaseModel{
    protected static $db;

    public function __construct()
    {
        self::$db = Database::getInstance();
    }

    abstract public function save();
    abstract public static function find(int $id);
  }
 
?>