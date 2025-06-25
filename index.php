<?php
require_once 'config/autoload.php';
require_once 'controllers/UserController.php';
require_once 'config/Router.php';

$router = new Router();
$router->handleRequest($_GET);
?>