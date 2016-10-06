<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html_lib {
    
    private $CI;
    
    public function __construct() {
        $this->CI = &get_instance();;
    }
    
    public function render_span($element) {
        switch ($this->CI->config->item('render_lib')) {
            case 'withStyle':
                return '<span style="' . $element['style'] . '">' . $element['name'] . '</span>';
            case 'withoutStyle':
            default:
                return '<span>' . $element['name'] . '</span>';                
        }                
    }
    
}
