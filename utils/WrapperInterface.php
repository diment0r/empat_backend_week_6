<?php 

namespace utils;

interface WrapperInterface { // ! INTERFACE
    static function getInstance();
    public function __get($key);
}