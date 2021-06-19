<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('start', 'DefaultController');
Routing::get('recipe', 'RecipeController');
Routing::post('login', 'SecurityController');
Routing::post('addRecipe', 'RecipeController');

Routing::run($path);
