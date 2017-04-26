<?php

class HelloHelper extends CI_Controller {

    public function index() {

        $this->load->helper('youtube');
        echo youtube('http://www.youtube.com/watch?v=eYEtiWUHCRM&feature=g-all-u');
    }
}