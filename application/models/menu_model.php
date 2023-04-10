<?php
class menu_model extends CI_Model {

     public function __construct() {
     $this->load->database();
     }

     public function getmenu(){
         return $this->db->get('user_menu')->result_array();
     }
     
      public function get_menubyid($id){
         return $this->db->get_where('user_menu', ['id' => $id])->row_array();
      }

     public function deletemenu($id){
        $this->db->where('id',$id);
        $this->db->delete('user_menu');
     }

     public function edit(){
      
      $data = [
         'menu' => htmlspecialchars($this->input->post('name', true)),

     ];

     $this->db->where('id', $this->input->post('id'));
     $this->db->update('user_menu', $data);  
   }
}