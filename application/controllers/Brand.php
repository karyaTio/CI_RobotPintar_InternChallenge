<?php
class Brand extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('brand_model');
    }

    function index(){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['brands'] = $this->brand_model->brand_list();

        $this->load->view('templates/header');
        $this->load->view('brand/index', $data);
        $this->load->view('templates/footer');
    }

    function create(){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $this->form_validation->set_rules("nama", "Name", "required");

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('brand/create');
            $this->load->view('templates/footer');
        }else{
            $this->brand_model->save_brand();
            redirect('brand');
        }
    }
}