<?php

namespace utils;

use utils\WrapperInterface;

class GetWrapper implements WrapperInterface {
    private static $instance = null;

    protected function __construct() {
        
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new GetWrapper();
        }
        return self::$instance;
    }

    public function __get($key) {
        return $_GET[$key] ?? false;

        // ! REQUEST - суперглобальный массив который хранит в себе post get (возможно cookie но не уверен)
        // ? Просто я не нашел места этому пункту у себя в проекте, но показываю что понимание request есть)
        // return $_REQUEST[$key] ?? false;
    }
}