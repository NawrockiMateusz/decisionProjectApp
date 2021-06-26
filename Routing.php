<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/RecipeController.php';
require_once 'src/controllers/PermController.php';


class Routing {

    public static $routes;

    public static function get($url, $view)
    {
        self::$routes[$url] = $view;
    }
    public static function post($url, $view)
    {

        self::$routes[$url] = $view;
    }

    public static function run ($url) {

        $permController = new permController();

        $sessionControll = new SessionController();

        if($url==='register'){
            $url = 'register';
        } else if (!$sessionControll->checkCookieWithDatabase()) {
            $url = 'login';
        }
        else if ($url==='login') {
            $url = 'start';
        }

        if($url === 'addRecipe' and $permController->isAdmin()!==2){
            $url="recipe";
        } else if ($url === 'addRecipe' and $permController->isAdmin()===2){
            $url="addRecipe";
        }

        $action = explode("/", $url)[0];
        if (!array_key_exists($action, self::$routes)) {
            die("Wrong url!");
        }


        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'login';

        $object->$action();
    }


}
