<?php 

namespace Model;

class BaseDatabase{
    private static $_instance = null;

    private function __construct(){
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            self::$_instance = $conn;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        return self::$_instance;
    }

    public static function getConnectDatabase(){
        if(is_null(self::$_instance)){
            self::$_instance = new BaseDatabase();
        }
        return self::$_instance;
    }
}