<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_model extends CI_Model{
    public function saveData($data){
        {
            $this->db->insert('student',$data);
            $name=$this->db->insert_id();
            $email=$this->db->insert_id();   
        }
        return $name;

    }
    function return_users(){
        $this->load->database();
        $query=$this->db->query("SELECT * FROM student");
        $query->result_array();
       return $query->result_array();
    }
    function find_user($id){
        return $this->db->get_where('student', array('id'=>$id))->row();
    }
    // Updating data in database
    function updating_data($id){
        $data=array(
            'name'=>$this->input->post("name"),
            'email'=>$this->input->post("email")

        );
        $this->db->where('id',$id);
        $this->db->update('student',$data);

    }
    
}
?>