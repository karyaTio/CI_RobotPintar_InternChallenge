<?php 
class Admin_model extends CI_Model {

    function register($enc_password){
        $data = array(
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'sandi' => $enc_password
        );

        $this->db->insert('admin', $data);
    }

    function login($email, $password){

        $this->db->where('email', $email);
        $this->db->where('sandi', $password);
        
        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        }else{
            return false;
        }
    }

    public function get_out_of_stock(){
        $this->db->where('stok <=', '0');
        $query = $this->db->get('daftar_robot');

        return $query->result_array();
    }

    // Check if email exists
    public function check_email_exists($email){
        $query = $this->db->get_where('admin', array('email' => $email));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
}