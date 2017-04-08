<?php

class Post extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->model("post_model", "model");
    }

    public function index() {
      
        $this->load->view("header");

        $posts = $this->model->getAll();

        $data = array("posts" => $posts);
        $this->load->view("post/all", $data);

        $this->load->view("footer");
    }

    public function view($id_post) {

        $post = $this->model->get($id_post);

        if($post) {
            $this->load->view("header");

            $data = array("post" => $post);
            $this->load->view("post/view.php", $data);

            $this->load->view("footer");
        } else {
            show_404();
        }

    }

    public function show_add() {
      
        $this->load->view("header");

        $this->load->helper("form");
        $this->load->view("post/add");

        $this->load->view("footer");
    }

    public function do_add() {
      
      //Loaded automatically by CodeIgniter 3 (The Udemy Video is in Version 2)
      //$this->load->library("input");

      $title = $this->input->post("title");
      $text = $this->input->post("text");

      $this->load->model("post_model", "model");
      $this->model->add($title, $text);

      redirect(site_url("post"));
    }

    public function delete($id_post) {

        $this->model->delete($id_post);
        redirect(site_url("post"));
    }
}