<?php
require_once 'Router.php';
$router = new Router();
require_once 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


