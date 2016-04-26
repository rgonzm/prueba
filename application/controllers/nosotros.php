<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class nosotros extends CI_Controller{
    
    
    function index(){
        $titulo['title'] = "Nosotros - VRIN Consultores Informáticos";
        $data['hola']  = "asdlasdlaks";
        $pie['script'] = array();
        
        $this->load->view('head_view',$titulo);
        $this->load->view('nosotros_view',$data);
        $this->load->view('footer_view',$pie);
    }
    
}
?>
