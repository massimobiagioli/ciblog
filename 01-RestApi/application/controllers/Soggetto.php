<?php
require_once APPPATH . 'controllers/REST_Controller.php';

class Soggetto extends REST_Controller {
    
    protected function initVars() {
        $this->model = 'soggetto';
    }        

}
