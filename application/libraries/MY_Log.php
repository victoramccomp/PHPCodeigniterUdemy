<?php

class MY_Log extends CI_Log {

    public function info($message) {

        parent::write_log("INFO", $message);
    }
}