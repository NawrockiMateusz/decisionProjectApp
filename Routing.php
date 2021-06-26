<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/RecipeController.php';


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

        $sessionControll = new SessionController();

        if($url==='register'){
            $url = 'register';
        } else if (!$sessionControll->checkCookieWithDatabase()) {
            $url = 'login';
        }
        else if ($url==='login') {
            $url = 'start';
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
