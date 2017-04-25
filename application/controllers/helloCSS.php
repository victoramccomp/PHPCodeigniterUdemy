<?php

class HelloCSS extends CI_Controller {

    public function index() {
        //
        $this->load->library("css");
        $this->css->add("main.css");
        $this->css->add("print.css");

        echo $this->css->generate();
    }
}