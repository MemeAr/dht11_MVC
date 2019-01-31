<?php
use controller\Router;

require "inc/config.inc.php";

require "vendor/autoload.php";

$router = new Router();
$router->routeTheRequest();