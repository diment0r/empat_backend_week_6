<?php 

namespace data;

use data\Post;
use DateTime;

trait Json { // ! TRAIT
    public function jsonReader($path) {
        $json = file_get_contents(implode("", [$path, '/data.json'])); // ! IMPLODE
        return json_decode($json);
    }

    public function jsonParser($data) {
        for($i = 0; $i < count($data); $i++) {
            $post = new Post($data[$i]->title, $data[$i]->description);
            array_push($this->posts, $post);
        }
    }

    public function jsonWriter($post, $path) {
        $data = $this->jsonReader($path);
        array_push($data->posts, $post);
        file_put_contents($path.'/data.json', json_encode($data));
    }
}

class Database {
    use Json;

    // ! PRIVATE FIELD
    private $posts = []; // ! МАССИВ 

    protected function __construct() {
        $path = str_replace("data", "config", __DIR__);
        $data = $this->jsonReader($path);

        $this->jsonParser($data->posts);
    }

    public function getPosts() {
        return $this->posts;
    }

    public function addPost($post) {
        array_push($this->posts, $post);
        $this->jsonWriter($post, str_replace("data", "config", __DIR__));
    }

    private static $instance = null; // ! SINGLETON

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}