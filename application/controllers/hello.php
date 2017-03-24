<?php if ( ! defined('BASEPATH')) exit('No direct script access alowed');

class Hello extends CI_Controller {
    
    public function one($name) {
        //
        $this->load->view('header');

        $this->load->model("hello_model", "model");
        $profile = $this->model->getProfile("victor");

        $data = array("name" => $name);
        $data['profile'] = $profile;

        $this->load->view('one', $data);   
    }

    public function helpers() {
        //
        $this->load->helper("html");

        echo heading("This is heading");
    }
}