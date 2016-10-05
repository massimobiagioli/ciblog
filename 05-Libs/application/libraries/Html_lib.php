<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html_lib {

    public function render_span($element) {
        return '<span style="' . $element['style'] . '">' . $element['name'] . '</span>';
    }
    
}
