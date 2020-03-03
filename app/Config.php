<?php 

#Defining constants
define('URL_BASE', 'https://localhost/acessos-sites');
define('DATABASE_DATA', [
    'HOST' => 'localhost',
    'PORT' => '3306',
    'DB_NAME' => 'crud',
    'USER' => 'root',
    'PASSWORD' => '',
    'DRIVER' => 'mysql',
    'CHARSET' => 'utf-8'
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

# Function to verify the current uri
function isCurrentUri($argv)
{
    $anchor = "/". $argv ."/";
    return $anchor == $_SERVER['REQUEST_URI'];
}