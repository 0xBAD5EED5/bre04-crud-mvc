<?php
require 'controllers/PageController.php';
require 'config/Router.php';

$router = new Router();
$router->handleRequest($_GET);
?>