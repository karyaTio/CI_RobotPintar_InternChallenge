<?php
class Users extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){

        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['users'] = $this->user_model->users_list();

        $this->load->view('templates/admin/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');

    }
}