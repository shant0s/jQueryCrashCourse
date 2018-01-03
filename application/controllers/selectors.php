<?php 

class selectors extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        //load the helper
        $this->load->helper(array('url'));
        
    }
    
    public function index(){
        $this->load->view('public/selectors');
    }
    
    
}