<?php

require_once 'vendor/autoload.php';

use CoffeeCode\Router\Router;
use App\Controllers\AccessController;

$router = new Router(URL_BASE);

$router->group(null);
$router->namespace("App\Controllers");
$router->get("/", "WebController:index", "web.index");
$router->get("/grupo", "WebController:group", "web.group");
$router->get("/sobre", "WebController:about", "web.about");

$router->group("error");
$router->get("/{errcode}", "WebController:showError", "web.error");

$router->dispatch();

if ($router->error()) 
{
    $router->redirect("/error/{$router->error()}");
}
