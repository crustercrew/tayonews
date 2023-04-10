<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administration extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administration/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administration/view', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administration/profile', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['categories'] = $this->post_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administration/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            //upload image
            $config['upload_path'] = './assets/img/posts';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '1500';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }


            $this->post_model->create_post($post_image);
            redirect('administration');
        }
    }
    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('administration');
    }

    public function edit($slug)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['categories'] = $this->post_model->get_categories();

        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'edit post';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administration/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->post_model->update_post();
        redirect('administration');
    }
}
