<?php

class XSS extends CI_Controller {

    public function index() {
        //Set at config/autoload.php in helpers section
        //$this->load->helper("form");

        echo form_open("xss/show", array("method" => "POST"));
        echo form_textarea(array("name" => "code"));
        echo "<br>";
        echo form_submit(array("value" => "Please, wait!"));
        echo form_close();
    }

    public function show() {

        $code = $this->input->post("code");

        //Just with this line the user can send JS code in the textarea and execute that
        //NOT SAFE!!!!
        //echo $code;
        //Line bellow changed in the config/config.php (old = FALSE)
        //$config['global_xss_filtering'] = TRUE;
        echo $this->security->xss_clean($code);
    }
}