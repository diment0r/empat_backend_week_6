<?php

namespace core;

class Router {
    protected $routes = [];
    protected $params = []; // ! АССОЦИАТИВНЫЙ МАССИВ 

    public function __construct() {
        $configRoutes = require 'config/routes.php';
        foreach($configRoutes as $key => $value) {
            $this->routes[$key] = $value;
        }
    }

    public function isRouteExists() {
        $url = trim(str_replace('/empat_backend_week_6/', '', $_SERVER['REQUEST_URI']), '/');
        $cutUrl = explode("?", $url)[0]; // ! EXPLODE
        foreach($this->routes as $route => $params) {
            if($route === $cutUrl) { // ! СРАВНЕНИЕ
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function start() {
        if($this->isRouteExists()) {
            $controllerPath = 'controllers\\'.ucfirst($this->params['controller']).'Controller'; // ! КОНКАТЕНАЦИЯ
            if(class_exists($controllerPath) && method_exists($controllerPath, $this->params['method'])) {
                $method = $this->params['method'];
                $controller = new $controllerPath($this->params);
                $controller->$method(); // ! РАЗЫМЕНОВАНИЕ
            } else {
                echo 'Controller or method not found';
            }
        } else {
            echo 'Route not found';
        }
    }
}
