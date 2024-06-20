<?php
session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';

// instance of the Router
$router = new App\Router($_SERVER['REQUEST_URI']);

// homepage
$router->get('/', "UserController@index");

//ROUTES EN POST
//*******************************

//Route pour stocker un nouvel user dans la base de données
$router->post('/register', "UserController@register");

$router->run();
