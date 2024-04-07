<?php 

namespace data;

class Post {
    public $id;
    public $title;
    public $description;
    public static $counter = 0;

    public function __construct($title, $description) {
        $this->id = ++Post::$counter;
        $this->title = $title;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }
}