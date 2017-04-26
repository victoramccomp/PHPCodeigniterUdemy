<?php

class HelloLog extends CI_Controller {

    public function index() {

        $this->load->library('log');
        //Doing with the next line using the MY_Log.php... Didn't worked for me :('
        //$this->log->write_log("INFO", "this is logging");
        $this->log->info("this is logging");
    }
}