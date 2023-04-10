<?php
class Product extends CI_Controller
{
	public function index()
	{
		$data['posts'] = $this->product_m->get_all();
		$this->load->view('posts', $data);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['posts'] = $this->cari->get_product_keyword($keyword);
		$this->load->view('search', $data);
	}
}
