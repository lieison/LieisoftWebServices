<?php


class Chat  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('chat_model');
    }
    
    public function index(){
        $this->output->set_header("");
        echo "(" . json_encode($this->chat_model->getchat()) . ");";
    }
    
    public function add($id , $message){
         $request = $this->chat_model->setchat($id, $message);
         
    }
    
   
}
