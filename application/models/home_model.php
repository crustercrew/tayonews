<?php
class home_model extends CI_Model {

     public function __construct() {
     $this->load->database();
     }

     public function beritane($slug = FALSE){
          if ($slug === FALSE){
               $this->db->order_by('posts.id','DESC');
               $this->db->join('categories','categories.id = posts.category_id');
               $query = $this->db->get('posts');
               return $query->result_array();
          }
          $query = $this->db->get_where('posts', array('slug' => $slug));
          return $query->row_array();
     }
     
     public function get_berita($slug = FALSE){
        if ($slug === FALSE){
             $this->db->order_by('posts.id','DESC');
             $this->db->limit(3);
             $this->db->join('categories','categories.id = posts.category_id');
             $query = $this->db->get('posts');
             return $query->result_array();
        }
        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row_array();
   }

   public function latest_sidebar($slug = FALSE){
     if ($slug === FALSE){
          $this->db->order_by('posts.id','DESC');
          $this->db->limit(5);
          $this->db->join('categories','categories.id = posts.category_id');
          $query = $this->db->get('posts');
          return $query->result_array();
     }
     $query = $this->db->get_where('posts', array('slug' => $slug));
     return $query->row_array();
}
   
   public function get_posts($slug = FALSE){
    if ($slug === FALSE){
         $this->db->order_by('posts.id','DESC');
         $this->db->join('categories','categories.id = posts.category_id');
         $query = $this->db->get('posts');
         return $query->result_array();
    }
    $query = $this->db->get_where('posts', array('slug' => $slug));
    return $query->row_array();
    }

    public function get_categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
   }
   
   public function get_post_by_categories1(){
     $this->db->order_by('posts.id','DESC');
     $this->db->limit(2);
     $this->db->join('categories','categories.id = posts.category_id');
     $query = $this->db->get_where('posts',array('category_id' => '2'));
     return $query->result_array();
   }
   
   public function get_post_by_categories2(){
     $this->db->order_by('posts.id','DESC');
     $this->db->limit(4);
     $this->db->join('categories','categories.id = posts.category_id');
     $query = $this->db->get_where('posts',array('category_id' => '1'));
     return $query->result_array();
   }

   public function post_tech(){
     $this->db->order_by('posts.id','DESC');
     $this->db->join('categories','categories.id = posts.category_id');
     $query = $this->db->get_where('posts',array('category_id' => '2'));
     return $query->result_array();
   }

   public function post_game(){
     $this->db->order_by('posts.id','DESC');
     $this->db->join('categories','categories.id = posts.category_id');
     $query = $this->db->get_where('posts',array('category_id' => '1'));
     return $query->result_array();
   }
}