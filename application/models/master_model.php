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
    
    public function update_info($tbl_name,$data,$id_name,$salary_id){
        $this->db->where($id_name,$salary_id);        
        $this->db->update($tbl_name,$data);
    }
    
    public function select_all($tbl_name){
        $this->db->select('*');
        $this->db->from($tbl_name);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function edit_info($tbl_name,$salary_id,$id_name){
        $this->db->select('*');
        $this->db->from($tbl_name);
        $this->db->where($id_name,$salary_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete_salary_info($tbl_name,$salary_id){
        $this->db->where('id_salary_payment',$salary_id);
        $this->db->delete($tbl_name);        
    }
}
