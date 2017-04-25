<?php

class Css {

    var $files = array();

    public function add($file) {
        //
        $this->files[] = $file;
    }

    public function generate() {

        $cssString = "";
        $CI = &get_instance();
        $CI->load->helper("html");

        foreach($this->files as $file) {

            $cssString .= link_tag('css/' . $file) . "\n";
        }

        return $cssString;
    }

}