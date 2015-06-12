<?php


class Chat_Model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function setchat($id , $message){
        
        $date = new DateTime();
        
     
        $data = array(
             "id_profile"   => $id,
             "message"      => urldecode($message),
             "date"         => $date->format("Y-m-d H:i")
        );
        
        $result =  $this->db->insert("chat" , $data);

        return $result;
    }
    
    public function getchat(){
        
        $query = "SELECT chat_profile.name as 'name' , chat_profile.avatar as 'avatar' ,"
                . " chat.message as 'message' , chat.date as 'date' FROM chat_profile "
                . " RIGHT JOIN chat ON chat_profile.id_profile=chat.id_profile"
                . " ORDER BY chat.date ASC";
        
        $result = $this->db->query($query)->result_array();
        
        return $result;
        
    }
    
    public function getkey($key){
        
        $query = "SELECT COUNT(*) AS 'key' FROM chat_profile "
                . " WHERE id_profile LIKE '$key'";
        $result = $this->db->query($query)->result_array();
        return $result[0]["key"];
    }


}
