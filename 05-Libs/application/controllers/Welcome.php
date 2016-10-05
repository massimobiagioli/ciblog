<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        //$this->load->library('html_lib');
        
        $data = [
            'k1' => [
                'name' => 'dummy',
                'style' => 'color: blue;'
            ]
        ];
        $this->load->view('WelcomeView', $data);
    }

}
