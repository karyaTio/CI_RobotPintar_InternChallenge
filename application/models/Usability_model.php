<?php 

class Usability_model extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    function usability_list(){
        $result = $this->db->get('jenis');
        return $result->result_array();
    }

    function save_usability(){
        $data = array(
            'nama' => $this->input->post('nama')
        );

        $this->db->insert('jenis', $data);
    }
}