<?php 

class Robots extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('robot_model');
    }

    function index(){

        $data['robots'] = $this->robot_model->robot_list();

        $this->load->view('templates/header');
        $this->load->view('robots/index', $data);
        $this->load->view('templates/footer');
    }

    function show($id){

        $data['robot'] = $this->robot_model->get_robot_detail($id);

        $this->load->view('templates/header');
        $this->load->view('robots/show', $data);
        $this->load->view('templates/footer');

    }

    function create(){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['brands'] = $this->robot_model->get_brand();
        $data['usability'] = $this->robot_model->get_usability();

        $this->form_validation->set_rules("nama", "Name", "required");
        $this->form_validation->set_rules("merek", "Brand", "required");
        $this->form_validation->set_rules("jenis", "Usability", "required");
        $this->form_validation->set_rules("harga", "Price", "required");
        $this->form_validation->set_rules("deskripsi", "Specs", "required");
        $this->form_validation->set_rules("gambar", "Image", "required");
        $this->form_validation->set_rules("stok", "Stock", "required");

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/admin/header');
            $this->load->view('robots/create', $data);
            $this->load->view('templates/admin/footer');
        }else{
            $this->robot_model->robot_create();

            $this->session->set_flashdata('robot_created', 'Robot succesffuly created');

            redirect('dashboard/product');
        }
    }

    function edit($id){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['robot'] = $this->robot_model->get_robot($id);
        $data['brands'] = $this->robot_model->get_brand();
        $data['usability'] = $this->robot_model->get_usability();

        $this->form_validation->set_rules("nama", "Nama", "required");
        $this->form_validation->set_rules("merek", "merek", "required");
        $this->form_validation->set_rules("jenis", "jenis", "required");
        $this->form_validation->set_rules("deskripsi", "deskripsi", "required");
        $this->form_validation->set_rules("gambar", "gambar", "required");
        $this->form_validation->set_rules("stok", "stok", "required");
        $this->form_validation->set_rules("harga", "Price", "required");

        $this->load->view('templates/admin/header');
        $this->load->view('robots/edit', $data);
        $this->load->view('templates/admin/footer');
    }

    function update(){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $this->robot_model->update_robot();

        $this->session->set_flashdata('robot_updated', 'Robot succesffuly updated');

        redirect('dashboard/product');
    }

    function delete($id){

        // Check if loggin
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $this->robot_model->delete_robot($id);

        $this->session->set_flashdata('robot_deleted', 'Robot succesffuly deleted');

        redirect('dashboard/product');
    }


    public function manage(){

        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['robots'] = $this->robot_model->robot_list();

        $this->load->view('templates/admin/header');
        $this->load->view('robots/manage', $data);
        $this->load->view('templates/footer');

    }
}