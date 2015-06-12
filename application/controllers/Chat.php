<?php


class Chat  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('chat_model');
    }
    
    public function index(){
        //header('Access-Control-Allow-Origin: *');
        $this->output->set_header("Access-Control-Allow-Origin: *");
        echo "(" . json_encode($this->chat_model->getchat()) . ");";
    }
    
    public function add($id , $message){
         $this->output->set_header("Access-Control-Allow-Origin: *");
         $request = $this->chat_model->setchat($id, $message);
         echo $request;
    }
    
    public function getkey($key){
        $this->output->set_header("Access-Control-Allow-Origin: *");
        $request = $this->chat_model->getkey($key);
        echo $request;
    }
    
   
}
