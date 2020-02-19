<?php 

namespace App\lib;

use PDO;

/*
* Class to make connection with database
*
* @author Erick O. dos Santos
* @access public
*/
abstract class ConnectionToDB
{
    public static $connectionData;

    /*
    * Method to make a connection with database if its not exists
    *
    * @return PDO
    * @throw \Exception When the connection fails
    */
    public static function makeConnection()
    {
        if (self::$connectionData == null){
            try {
                self::$connectionData = new PDO(
                    'mysql: host='. DATABASE_DATA['HOST'] .'; dbname='. DATABASE_DATA['DB_NAME'] .'; charset=utf8', 
                    DATABASE_DATA['USER'],
                    DATABASE_DATA['PASSWORD']
                );
            } catch (Exception $error) {
                throw new Exception("Não foi possível se conectar ao banco");
            }
        }
        return self::$connectionData;
    }

    /*
    * Method to get connection already done
    *
    * @return PDO
    */
    public static function getConnection()
    {
        return self::$connectionData;
    }
}
