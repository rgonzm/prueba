<?php

class Mail extends CI_Controller{
    function index(){
        
    }
    
    function send_mail(){
        
        
        /*
         *  
         * $mail = $_REQUEST['mail'] ;
            $mensaje = $_REQUEST['mensaje'] ;
            $nombre = $_REQUEST['nombre'] ;
            $fono = $_REQUEST['fono'] ;
         * 
         * 
         */
        
        $email = $this->input->post('mail');
        $mensaje = $this->input->post('mensaje');
        $nombre = $this->input->post('nombre');
        $fono = $this->input->post('fono');
        
        $data['mail'] = $email;
        $data['mensaje'] = $mensaje;
        $data['nombre'] = $nombre;
        $data['fono'] = $fono;
        
        $contacto =  array($email,'contacto@vrin.cl');
        
        $this->load->library( 'email' );
        
        foreach ($contacto as $correo){
            $this->email->set_mailtype("html");
            $this->email->from( $email, $nombre. " - Contacto Vrin " );
            $this->email->to( $correo );
            $this->email->subject( 'Contacto desde www.vrin.cl' );
            $this->email->message( $this->load->view( 'mail_view', $data, true ) );
            $this->email->send();
        }
        
        
        $resp["clase"] = "alert alert-success";
        $resp["mensaje"] = "Correo Enviado! Gracias por comunicarte con VRIN.";
        
        $this->output->set_content_type('application/json')->set_output(json_encode($resp));
        
       
    }
    
    
}
?>
