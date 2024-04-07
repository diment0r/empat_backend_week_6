<?php

require "core/Router.php";
require "core/Controller.php";
require "core/View.php";
require "core/Model.php";

require "controllers/PostController.php";
require "controllers/AuthController.php";

require "models/PostModel.php";

require "data/Database.php";
require "data/Post.php";

require "utils/WrapperInterface.php";
require "utils/PostWrapper.php";
require "utils/GetWrapper.php";
require "utils/CookieWrapper.php";


use core\Router;

$router = new Router();
$router->start();
