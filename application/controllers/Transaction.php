<?php
class Transaction extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('transaction_model');
    }

    public function index(){

        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        $data['transactions'] = $this->transaction_model->transaction_list();

        $this->load->view('templates/admin/header');
        $this->load->view('transaction/index', $data);
        $this->load->view('templates/footer');

    }
}