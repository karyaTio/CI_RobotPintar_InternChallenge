<?php
class Transaction_model extends CI_Model {

    function get_top_sale(){
        $this->db->limit(1);
        $query = $this->db->get('top_sales');
        return $query->row_array();
    }

    function get_montly_profit(){
        $query = "CALL get_monthly_profit(MONTH(NOW()));";
        $result = $this->db->query($query);


        return $result->row_array();
    }
}