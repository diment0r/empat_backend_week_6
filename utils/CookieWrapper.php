<?php 

namespace utils;

use utils\WrapperInterface;

class CookieWrapper implements WrapperInterface {
    private static $instance = null;

    protected function __construct() {
        
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new CookieWrapper();
        }
        return self::$instance;
    }

    public function __get($key) {
        return $_COOKIE[$key] ?? false;
    }
}