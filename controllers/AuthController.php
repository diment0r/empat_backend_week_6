<?php 

namespace controllers;

use core\Controller;
use utils\GetWrapper;
use utils\CookieWrapper;

class AuthController extends Controller { // ! CLASS
    function __construct($params) { // ! CONSTRUCTOR
        parent::__construct($params); // ! PARENT CONSTRUCTOR
    }

    public function login() {
        $queryParam = GetWrapper::getInstance()->query;
        setcookie("token", $queryParam, time() + 3600); // ! COOKIES
        header('location: '.'/empat_backend_week_6/');
		exit;
    }

    public function logout() {
        setcookie("token", "", time() - 3600); // ! COOKIES
        header('location: '.'/empat_backend_week_6/');
		exit;
    }


}