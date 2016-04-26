<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class contacto extends CI_Controller{
    
    
    function index(){
        $titulo['title'] = "Contacto - VRIN Consultores Informáticos";
        $titulo['css'] = array( #"input.input-append div.controls{width: 95%;}",
                                "textarea {resize: none;}");
        $data['hola']  = "asdlasdlaks";
        $pie['script'] = array("<script src='/assets/js/contacto.js'></script>");              
        
        $this->load->view('head_view',$titulo);
        $this->load->view('contacto_view');
        $this->load->view('footer_view',$pie);
    }
    
}
?>
