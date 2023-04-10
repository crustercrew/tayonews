<?php
class comment_model extends CI_Model {
    public function __construct() {
        $this->load->database();
        }

        public function create($slug){
            $data = array(
                'post_id' => $slug,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),

            );
        return $this->db->insert('comments',$data);
        }

        public function get_comments($slug){
            $query = $this->db->get_where('comments', array('post_id' => $slug));
            return $query->result_array();
        }
}