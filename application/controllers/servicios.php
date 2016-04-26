<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class servicios extends CI_Controller{
    
    
    function index(){
        $titulo['title'] = "Servicios - VRIN Consultores Informáticos";
        $data['hola']  = "asdlasdlaks";
        $pie['script'] = array();
        
        $this->load->view('head_view',$titulo);
        $this->load->view('servicios_view',$data);
        $this->load->view('footer_view',$pie);
    }
    
}
?>
