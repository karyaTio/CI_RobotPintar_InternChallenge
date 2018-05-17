<?php 

class Brand_model extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    function brand_list(){
        $result = $this->db->get('merek');
        return $result->result_array();
    }

    function save_brand(){
        $data = array(
            'nama' => $this->input->post('nama')
        );

        $this->db->insert('merek', $data);
    }
}