<?php
class user_model extends CI_Model {

     public function __construct() {
     $this->load->database();
     }

     public function get_user(){
         $query = $this->db->get('user');
         return $query->result_array();
     }
      public function get_userbyid($id){
         return $this->db->get_where('user', ['id' => $id])->row_array();
      }

     public function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('user');
     }

     public function edit(){
      
      $data = [
         'name' => htmlspecialchars($this->input->post('name', true)),
         'email' => htmlspecialchars($this->input->post('email', true)),
         'role_id' => htmlspecialchars($this->input->post('role_id', true)),
     ];

     $this->db->where('id', $this->input->post('id'));
     $this->db->update('user', $data);  
   }
}