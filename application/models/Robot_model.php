<?php

class Robot_model extends CI_Model {

    function __construct(){
        $this->load->database();
    }

    function robot_list(){
        $hasil = $this->db->get('daftar_robot');
        return $hasil->result_array();
    }

    function get_robot($id){
        $hasil = $this->db->get_where('robot', array('id' => $id));
        return $hasil->row_array();
    }

    function get_robot_detail($id){
        $hasil = $this->db->get_where('daftar_robot', array('id' => $id));
        return $hasil->row_array();
    }

    function robot_create(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'id_merek' => $this->input->post('merek'),
            'id_jenis' => $this->input->post('jenis'),
            'id_admin' => $this->session->userdata('user_id'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $this->input->post('gambar'),
            'stok' => $this->input->post('stok'),
            'harga' => $this->input->post('harga')
        );

        $this->db->insert('robot', $data);
    }

    function update_robot(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'id_merek' => $this->input->post('merek'),
            'id_jenis' => $this->input->post('jenis'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $this->input->post('gambar'),
            'stok' => $this->input->post('stok'),
            'harga' => $this->input->post('harga')
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('robot', $data);
    }

    function delete_robot($id){
        $this->db->where('id', $id);
        $this->db->delete('robot');
        return true;
    }

    function get_brand(){
        $result = $this->db->get('merek');
        return $result->result_array();
    }

    function get_usability(){
        $result = $this->db->get('jenis');
        return $result->result_array();
    }
}