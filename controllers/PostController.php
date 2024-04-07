<?php

namespace controllers;

use core\Controller;
use utils\PostWrapper;

class PostController extends Controller { // ! НАСЛЕДОВАНИЕ
    function __construct($params) {
        parent::__construct($params);
    }

    public function allPosts() {
        $posts = $this->model->getPosts();

        $args = [
            'posts' => $posts,
        ];

        $this->view->render($args);
    }

    public function index() {
        $this->view->render();
    }

    public function addPost() {
        $postWrapper = PostWrapper::getInstance();
        $this->model->createPost($postWrapper->title, $postWrapper->desc);
        header('location: '.'/empat_backend_week_6/');
		exit;
    }
}