<?php

require 'Routing.php';
require __DIR__.'/src/controllers/SessionController.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('start', 'DefaultController');
Routing::get('recipe', 'RecipeController');
Routing::post('login', 'SecurityController');
Routing::post('addRecipe', 'RecipeController');
Routing::post('register','DefaultController');
Routing::get('team', 'DefaultController');
Routing::get('welcome', 'DefaultController');
Routing::get('contact', 'DefaultController');
Routing::get('logOut', 'SecurityController');



Routing::run($path);
