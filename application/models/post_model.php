<?php

class Post_Model extends CI_Model {

    public function add($title, $text) {

        $data = array(
            "title" => $title,
            "text" => $text
        );

        $this->db->insert("post", $data);
    }
}