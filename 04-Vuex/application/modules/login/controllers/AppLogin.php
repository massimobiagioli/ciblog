<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppLogin extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        $this->load->view('app-login'); 
    }
    
    public function verify() {
        header('Content-Type: application/json');
        echo json_encode([
            'token' => 'asdf1234'
        ]);
    }
    
}