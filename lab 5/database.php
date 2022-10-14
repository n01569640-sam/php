<?php

class Database
{
    //properties
    private static $dbname = 'phpclass';

    private static $user = 'root';
    
    private static $pass = '';
    
    private static $dsn = "mysql:host=localhost;dbname=phpclass";
    private static $dbcon;

    private function __construct(){

    }
}
    public static function getdb()
    {
        if(!isset(self::$dbcon)) 
    }

