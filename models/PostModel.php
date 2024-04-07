<?php 

namespace models;

use core\Model;
use data\Post;

class PostModel extends Model {
    public function getPosts() {
        return $this->db->getPosts();
    }

    public function setSession($id) { 
        session_start();
        if(!isset($_SESSION['first_created_post_id'])) { // ! SESSIONS
            $_SESSION['first_created_post_id'] = $id;
        }
    }

    public function createPost($title, $description) {
        if(trim($title) != '' && trim($description) != '') {
            $post = new Post($title, $description);

            $this->setSession($post->getId());
 
            $this->db->addPost($post);
        } else {
            echo 'data error';
        }
    }
}