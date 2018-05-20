<?php
class User_model extends CI_Model {

    function users_list(){
        $hasil = $this->db->get('user_list');
        return $hasil->result_array();
    }

    function get_total_user(){
        $query = $this->db->get('pembeli');
        return $query->num_rows();
    }
}