<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class productos extends CI_Controller{
    
    
    function index(){
        $titulo['title'] = "Productos - VRIN Consultores Inform�ticos";
        $data['hola']  = "asdlasdlaks";
        $pie['script'] = array();
        
        $this->load->view('head_view',$titulo);
        $this->load->view('productos_view',$data);
        $this->load->view('footer_view',$pie);
    }
    
}
?>
