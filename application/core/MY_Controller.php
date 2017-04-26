<?php

class MY_Controller extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $controller = get_class($this);
        $model = $controller . '_model';

        $this->load->model($model, 'model');
    }
}