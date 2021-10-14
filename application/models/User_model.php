<?php
class User_model extends CI_Model{
    function return_users(){
        $this->load->database();
       // $query=$this->db->query("SELECT * FROM user");
        //$query=$this->db->get('user'); // functionality of this line can also be achieved using the line of code in line 5. 
        $query=$this->db->get_where('user',array('firstname'=>'Mxolisi'));  
        $query->result_array();
       return $query->result_array();
    }
}
?>