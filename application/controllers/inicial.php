<?php

class inicial extends CI_Controller{
    
    function index(){
        $titulo['title'] = "VRIN Consultores Informáticos";
        //$data['hola']  = "asdlasdlaks";
        $pie['script'] = array("<script src='/assets/js/inicial.js'></script>");
        
        $this->load->view('head_view',$titulo);
        $this->load->view('inicial_view');
        $this->load->view('footer_view',$pie);
    }
    
    
    function asdf(){
        $this->load->view('welcome_message');
    }
    
}
?>
