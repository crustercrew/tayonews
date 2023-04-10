<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{
    public function create($slug = NULL){
        $data['title'] = 'Tayo News';
        $data['body1'] = 'TAYO';
        $data['body2'] = 'News';

        $data['posts'] = $this->home_model->get_berita();
        $data['view'] = $this->home_model->beritane($slug);
        $data['latest'] = $this->home_model->latest_sidebar();
        
        $slug = $this->input->post('slug');
        $data['post'] = $this->home_model->beritane($slug);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/home/header', $data);
            $this->load->view('templates/home/navbar');
            $this->load->view('templates/home/hero');
            $this->load->view('home/view');
            $this->load->view('templates/home/footer');
        }else{
            $this->comment_model->create($slug);
            redirect('Home/'.$slug);
        }


    }











}