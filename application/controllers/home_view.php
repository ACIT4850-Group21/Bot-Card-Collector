<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_view extends Application {

    public function index() {
        $this->data['pagebody'] = 'home_view';
        $this->render();
    }
    
}