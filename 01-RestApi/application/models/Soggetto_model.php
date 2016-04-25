<?php
require_once APPPATH . 'models/REST_Model.php';

class Soggetto_model extends REST_Model {
    
    protected function initVars() {
        $this->tableName = 'soggetti';
        $this->pk = 'sog_id';
    }
        
}
