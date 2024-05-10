<?php

session_start();

const BASE_PATH = __DIR__ . '/./';


require "core/functions.php";
require base_path("core/Router.php");

$router = new Router();

$routes = require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

