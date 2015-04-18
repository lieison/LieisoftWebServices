<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
    
    var $value = array(
        "name" => "Rolando",
        "apellido"=> "Arriaza"
    );
    
    public function Index(){
    	
    	
        $this->load->model('login');
        $log = $this->login->getlogin();
        if(empty($log)):
            $log['empty']= "ESTA VACIA LA LISTA ";
        else:
            $log['value'] = $log;
        endif;
    
        $this->load->view("inicio" , $log);
       
    }
    
  
   
}
