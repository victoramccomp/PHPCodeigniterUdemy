<?php

class Post extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
    }

    public function index() {
      
        $this->load->view("header");
        $this->load->view("footer");
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

}