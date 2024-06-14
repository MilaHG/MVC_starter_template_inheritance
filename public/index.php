<?php
session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';

// instance of the Router
$router = new App\Router($_SERVER['REQUEST_URI']);

// homepage
$router->get('/', "UserController@index");



$router->run();
