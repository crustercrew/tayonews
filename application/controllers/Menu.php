<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->menu_model->getmenu();

        #$data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu baru ditambahkan!! </div>');
            redirect('menu');
        }
    }

    public function edit($id){
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();

        $data['menu'] = $this->menu_model->get_menubyid($id);

        $this->form_validation->set_rules('name','Name','required|trim');
        
        if ($this->form_validation->run() == false){

            $data['title'] = 'Edit menu';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edit', $data);
            $this->load->view('templates/footer');
        }else {
            $this->menu_model->edit($id);
            redirect('menu');
        }

    }

    public function delete($id)
    {
        $this->menu_model->deletemenu($id);
        redirect('menu');
     }
}
