<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Manager Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        #$data['users'] = $this->db->get('user')->result_array();
        $data['users'] = $this->user_model->get_user();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->user_model->get_userbyid($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/profile', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        $this->user_model->hapus($id);
        redirect('manager');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->user_model->get_userbyid($id);
        $data['role_id'] = ['1', '2'];

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Edit data';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('manager/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->user_model->edit($id);
            redirect('manager');
        }
    }
}
