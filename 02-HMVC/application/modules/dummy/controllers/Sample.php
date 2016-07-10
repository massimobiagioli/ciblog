<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
    
    public function action() {
        $data = [
            'k1' => 'v1',
            'k2' => 'v2'
        ];
        
        $this->output->set_content_type('application/json')
                     ->set_status_header('200')
                     ->set_output(json_encode($data));
    }
    
}