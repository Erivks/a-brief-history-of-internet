<?php 

#Defining constants
define('URL_BASE', 'https://localhost/acessos-sites');
define('DATABASE_DATA', [
    'HOST' => 'localhost',
    'PORT' => '3306',
    'DB_NAME' => 'crud',
    'USER' => 'root',
    'PASSWORD' => ''
]);

# Function for make and return an uri
function url($param = null)
{
    if ($param)
    {
        return URL_BASE . "/" . $param;
    } else {
        return URL_BASE . "/";
    }   
}