<?php
class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

    function register(){
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/register');
            $this->load->view('templates/footer');
        }else{
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->admin_model->register($enc_password);

            $this->session->set_flashdata('admin_registered', 'You are now registered and can log in');

            $this->session->set_flashdata('admin_registered', 'You are now registered as an admin');

            redirect('admin/login');
        }
    }

    function login(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/login');
            $this->load->view('templates/footer');
        }else{
            $email = $this->input->post('email');

            $password = md5($this->input->post('password'));

            $auth = $this->admin_model->login($email, $password);

            if($auth){
                $user_data = array(
                    'user_id' => $auth,
                    'email' => $email,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                // Create the session
                $this->session->set_flashdata('admin_login', 'You are now log in');

                redirect('robot');
            }else{
                $this->session->set_flashdata('admin_login_failed', 'Login is invalid');

                redirect('admin/login');
            }
        }
    }

    function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('admin_logout', 'You are now log out');

        redirect('admin/login');
    }

    function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please enter a different email address');
        

        if($this->admin_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }
}
