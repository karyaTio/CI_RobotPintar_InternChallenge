<?php
class User_model extends CI_Model {
    function get_total_user(){
        $query = $this->db->get('pembeli');
        return $query->num_rows();
    }
}