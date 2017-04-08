<?php

class Post_Model extends CI_Model {

    public function add($title, $text) {

        $data = array(
            "title" => $title,
            "text" => $text,
            "date" => time()
        );

        $this->db->insert("post", $data);
    }

    public function getAll() {

        $this->db->order_by("id_post", "desc");
        return $this->db->get("post")->result_array();
    }
}