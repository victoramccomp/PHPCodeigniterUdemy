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

    public function get($id_post) {

        $this->db->where("id_post", $id_post);
        $result = $this->db->get("post")->result_array();

        if (count($result) == 1)
            return $result[0]; 
        else 
            return false;
    }

    public function delete($id_post) {

        $sql = "DELETE FROM post WHERE id_post=?";
        $this->db->query($sql, array($id_post));
    }
}