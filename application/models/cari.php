<?php
class Product_m extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('posts')->result();
    }
    public function get_product_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->like('title', $keyword);
        $this->db->or_like('body', $keyword);
        return $this->db->get()->result();
    }

    public function __construct()
    {
        $this->load->database();
    }
    public function cari()
    {
        $cari = $this->input->GET('posts', TRUE);
        $data = $this->db->query("SELECT * from dborang where Name like '%$cari%' ");
        return $data->result();
    }
}
