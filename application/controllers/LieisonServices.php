<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/LieisoftWebServices/index.php/lieisonservices/plugins/{key}/{name}/{version}

class LieisonServices extends CI_Controller {
    

    public function __construct() {
        parent::__construct();
        $this->load->model('PluginModel');
    }
    
    public function Index(){
       
        $this->load->view("PluginUpdates");
    }
    
    public function Plugins($key , $name , $version){
        $json_decode = array("version" =>"" , "url"=>"");
        $key_plugin = $this->PluginModel->GetKey("plugin");
        if(strcmp($key_plugin, $key) != 0){
            echo "La llave primaria es incorrecta";
        }
        $plugin = $this->PluginModel->GetPluginByName($name);
        $plugin = $plugin[0];
        
        if(count($plugin) <= 0){
            echo json_encode($json_decode);
        }
        
        if(floatval($plugin->version) > floatval($version)){
            $json_decode = array("version" =>$plugin->version , "url"=>$plugin->url);
        }
        else{
            $json_decode = array("version" =>"0" , "url"=>"0");
        }
        
        echo json_encode($json_decode);
        
    }
    
    public function CopyRight(){
          $copy = '<button onclick="Lieison();" target="_blank" style="font-size:12px;" class="btn btn-block">Developed By:<b>Lieison Working Together.</b> </button>';
          echo json_encode(array($copy));
    }
    
    
    
}
