<?php 

namespace App\lib;

use PDO;

abstract class ConnectionToDB
{
    public static $connectionData;

    public static function makeConnection()
    {
        if (self::$connectionData == null){
            try {
                self::$connectionData = new PDO(
                    'mysql: host=localhost; dbname=laravel; charset=utf8', 
                    'root',
                    ''
                );
            } catch (Exception $error) {
                throw new Exception("Não foi possível se conectar ao banco");
            }
        }
        return self::$connectionData;
    }

    public static function getConnection()
    {
        return self::$connectionData;
    }
}