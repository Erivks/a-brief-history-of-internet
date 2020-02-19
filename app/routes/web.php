<?php

require_once 'vendor/autoload.php';

use CoffeeCode\Router\Router;
use App\Controllers\AccessController;

$router = new Router(URL_BASE);

$router->group(null);
$router->namespace("App\Controllers");
$router->get("/", "WebController:index");

$router->group("error");
$router->get("/{errcode}", "WebController:showError");

$router->dispatch();

if ($router->error()) 
{
    $router->redirect("/error/{$router->error()}");
}
