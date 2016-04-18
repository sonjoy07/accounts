<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of master_model
 *
 * @author sonjoy
 */
class Master_Model extends CI_Model {
    //put your code here
    
    public function save_info($tbl_name,$data){
        $this->db->insert($tbl_name,$data);
    }
    
    public function select_all_salary_amount(){
        $this->db->select('*');
        $this->db->from('salary_payment');
        $query = $this->db->get();
        return $query->result();
    }
}
