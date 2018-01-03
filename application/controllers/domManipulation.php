<?php

class DomManipulation extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
    }
    
    public function index(){
        $this->load->view('public/domManipulation');
    }
}