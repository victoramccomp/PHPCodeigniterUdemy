<?php

class HelloCore extends MY_Controller {

    public function index() {

        echo $this->model->foo();
    }
}