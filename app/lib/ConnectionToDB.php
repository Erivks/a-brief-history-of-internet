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
                    'mysql: host='. HOST_DATABASE .'; dbname='. DB_NAME .'; charset=utf8', 
                    USER_DATABASE,
                    PASSWORD_DATABASE
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