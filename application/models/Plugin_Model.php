<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PluginModel
 *
 * @author rolandoantonio
 */
class Plugin_Model extends CI_Model {
    
    
    
    public function __construct() {
        parent::__construct();
        $this->DB_LOAD();
    }
    
    private function DB_LOAD(){
        $this->load->database();
    }
    
    public function GetKey($asign){
        $result = $this->db->query("SELECT key_value as 'key' FROM key_values WHERE asign LIKE '$asign' ");
        if(count($result)>= 1){
            $key = $result->result();
            return $key[0]->key;
        }else{
            return "";
        }
    }
    
    public function GetPluginByName($name ){
        $result = $this->db->query("SELECT version , url FROM plugins WHERE name LIKE '$name'");
        return $result->result();
    }
    
   
}
