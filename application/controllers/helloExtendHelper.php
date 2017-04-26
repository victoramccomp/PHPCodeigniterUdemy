<?php

class HelloExtendHelper extends CI_Controller {

    public function index() {

        $this->load->helper("html");
        echo script_tag("js/main.js");
    }
}