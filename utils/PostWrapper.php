<?php

namespace utils;

use utils\WrapperInterface;

class PostWrapper implements WrapperInterface {
    private static $instance = null;

    protected function __construct() {
        
    }

    public static function getInstance() { // ! СТАТИЧЕСКИЙ МЕТОД
        if(self::$instance == null) {
            self::$instance = new PostWrapper();
        }
        return self::$instance;
    }

    public function __get($key) { // ! МАГИЧЕСКИЙ МЕТОД
        return $_POST[$key] ?? false;
    }
}