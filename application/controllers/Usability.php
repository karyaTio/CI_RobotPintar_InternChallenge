<?php 

class Usability extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('usability_model');
    }

    function index(){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['title'] = "Jenis jenis";

        $data['usability'] = $this->usability_model->usability_list();

        $this->load->view('templates/header');
        $this->load->view('usability/index', $data);
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
            $this->load->view('usability/create');
            $this->load->view('templates/footer');
        }else{
            $this->usability_model->save_usability();
            redirect('usability');
        }
    }

    function edit(){

    }

    function update(){

    }
}