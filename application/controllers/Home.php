<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
       
            $data['title'] = 'Tayo News';
            $data['body1'] = 'TAYO';
            $data['body2'] = 'News';


            $data['posts'] = $this->home_model->get_berita();
            $data['latest'] = $this->home_model->latest_sidebar();

            $data['categorie'] = $this->home_model->get_categories();
            $data['tech'] = $this->home_model->get_post_by_categories1();
            $data['game'] = $this->home_model->get_post_by_categories2();


            $this->load->view('templates/home/header', $data);
            $this->load->view('templates/home/navbar');
            $this->load->view('templates/home/hero');
            $this->load->view('home/index');
            $this->load->view('home/main');
            $this->load->view('home/mein');
            $this->load->view('templates/home/footer');
    }

    public function view($slug = NULL){
        $data['title'] = 'Tayo News';
        $data['body1'] = 'TAYO';
        $data['body2'] = 'News';

        $data['posts'] = $this->home_model->get_berita();
        $data['view'] = $this->home_model->beritane($slug);
        $slug = $data['view']['slug'];
        $data['comments'] = $this->comment_model->get_comments($slug); 

        $data['latest'] = $this->home_model->latest_sidebar();

        if(empty($data['view'])){
            show_404();
        }
        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/navbar');
        $this->load->view('templates/home/hero');
        $this->load->view('home/view');
        $this->load->view('templates/home/footer');
    }

    public function view_all(){
        $data['title'] = 'Tayo News';
        $data['body1'] = 'TAYO';
        $data['body2'] = 'News';

        $data['posts'] = $this->home_model->get_berita();
        $data['all'] = $this->home_model->get_posts();

        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/navbar');
        $this->load->view('templates/home/hero');
        $this->load->view('home/view_all');
        $this->load->view('templates/home/footer');
    }

    public function tech(){
        $data['title'] = 'Tayo News';
        $data['body1'] = 'TAYO';
        $data['body2'] = 'News';

        $data['posts'] = $this->home_model->get_berita();
        $data['tech'] = $this->home_model->post_tech();

        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/navbar');
        $this->load->view('templates/home/hero');
        $this->load->view('home/tech');
        $this->load->view('templates/home/footer');
    }
    
    public function game(){
        $data['title'] = 'Tayo News';
        $data['body1'] = 'TAYO';
        $data['body2'] = 'News';

        $data['posts'] = $this->home_model->get_berita();
        $data['game'] = $this->home_model->post_game();

        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/navbar');
        $this->load->view('templates/home/hero');
        $this->load->view('home/game');
        $this->load->view('templates/home/footer');
    }
    
}