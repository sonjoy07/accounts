<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_Controller extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
    }
//salary payment starts
    public function index() {
        $data = array();
        $data['title'] = "Accounts";
        $data['salary'] = $this->master_model->select_all('salary_payment');
        $data['main_content'] = $this->load->view('salary/salary_table',$data,true);
        $this->load->view('master',$data);
    }
    
    public function salary_amount(){
        $data = array();
        $data['title'] = "Accounts|Salary";
        $data['main_content'] = $this->load->view('salary/salary_amount',$data,true);
        $this->load->view('master',$data);
    }


    public function save_salary_amount(){
        $data = array();
        $data['month_salary_payment'] = $this->input->post('month_salary_payment');
        $data['year_salary_payment'] = $this->input->post('year_salary_payment');
        $data['issue_salary_payment'] = date('y-m-d',strtotime($this->input->post('issue_salary_payment')));
        $data['date_salary_payment'] = date('y-m-d',strtotime($this->input->post('date_salary_payment')));
        $data['amount_salary_payment'] = $this->input->post('amount_salary_payment');
        $this->master_model->save_info('salary_payment',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_amount');
        
    }
        
    public function edit_salary($salary_id){
        $data = array();
        $data['title'] = "Accounts|Salary";
        $data['edit_salary'] = $this->master_model->edit_info('salary_payment',$salary_id,'id_salary_payment');
        $data['main_content'] = $this->load->view('salary/update_salary_amount',$data,true);
        $this->load->view('master',$data);
    }
    
    public function update_salary_amount(){
        $data = array();
        $salary_id =$this->input->post('update_salary_amount');
        $data['month_salary_payment'] = $this->input->post('month_salary_payment');
        $data['year_salary_payment'] = $this->input->post('year_salary_payment');
        $data['issue_salary_payment'] = date('y-m-d',strtotime($this->input->post('issue_salary_payment')));
        $data['date_salary_payment'] = date('y-m-d',strtotime($this->input->post('date_salary_payment')));
        $data['amount_salary_payment'] = $this->input->post('amount_salary_payment');
        $this->master_model->update_info('salary_payment',$data,$salary_id);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Updated!!</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/edit_salary');
        
    }
    
    public function delete_salary_info_by_salary_id($salary_id) {
        $this->master_model->delete_salary_info('salary_payment',$salary_id);
        redirect('master_controller/salary_amount');
    }
//    salary payment ends
    
    
//    salary bonus type starts
    public function salary_bonus_type(){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus Type";
        $data['main_content'] = $this->load->view('salary/salary_bonus_type',$data,true);
        $this->load->view('master',$data);
    }
    
    public function salary_bonus_type_list(){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus";
        $data['salary_bonus_type'] = $this->master_model->select_all('salary_bonus_type');
        $data['main_content'] = $this->load->view('salary/salary_bonus_type_list',$data,true);
        $this->load->view('master',$data);
    }
    
    public function edit_salary_bonus_type($bonus_type_id){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus Type";
        $data['edit_bonus_type'] = $this->master_model->edit_info('salary_bonus_type',$bonus_type_id,'id_salary_bonus_type');
        $data['main_content'] = $this->load->view('salary/update_bonus_type',$data,true);
        $this->load->view('master',$data);
    }
    
     public function save_bonus_type(){
        $data = array();
        $data['name_salary_bonus_type'] = $this->input->post('name_salary_bonus_type');
        $data['description_salary_bonus_type'] = $this->input->post('description_salary_bonus_type');
        $this->master_model->save_info('salary_bonus_type',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_bonus_type');        
    }
     public function update_bonus_type(){
        $data = array();
        $bonus_type = $this->input->post('id_salary_bonus_type');
        $data['name_salary_bonus_type'] = $this->input->post('name_salary_bonus_type');
        $data['description_salary_bonus_type'] = $this->input->post('description_salary_bonus_type');
        $this->master_model->save_info('salary_bonus_type',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/edit_salary_bonus_type/'.$type_id);        
    }
    
     public function delete_bonus_type_by_bonus_type_id($type_id) {
        $this->master_model->delete_salary_info('salary_bonus_type',$type_id);
        redirect('master_controller/salary_bonus_type_list');
    }
    
 //salary bonus type ends
    
//    salary bonus starts
    
    public function salary_bonus(){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus";
        $data['salary_payment'] = $this->master_model->select_all('salary_payment');
        $data['salary_bonus'] = $this->master_model->select_all('salary_bonus_type');
        $data['main_content'] = $this->load->view('salary/salary_bonus',$data,true);
        $this->load->view('master',$data);
    }
    public function salary_bonus_list(){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus";
        $data['salary_bonus'] = $this->master_model->select_all('salary_bonus');
        $data['main_content'] = $this->load->view('salary/salary_bonus_list',$data,true);
        $this->load->view('master',$data);
    }
    
    public function edit_salary_bonus($bonus_id){
        $data = array();
        $data['title'] = "Accounts|Salary Bonus";
        $data['edit_bonus'] = $this->master_model->edit_info('salary_bonus',$bonus_id,'id_salary_bonus');
        $data['main_content'] = $this->load->view('salary/update_salary_bonus',$data,true);
        $this->load->view('master',$data);
    } 
    
     public function save_bonus(){
        $data = array();
        $data['id_salary_bonus_type'] = $this->input->post('id_salary_bonus_type');
        $data['id_salary_bonus'] = $this->input->post('id_salary_bonus');
        $data['amount_salary_bonus'] = $this->input->post('amount_salary_bonus');
        $this->master_model->save_info('salary_bonus',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_bonus');
    }
     public function update_bonus(){
        $data = array();
        $id_bonus = $this->input->post('id_salary_bonus');
        $data['id_salary_bonus_type'] = $this->input->post('id_salary_bonus_type');
        $data['id_salary_bonus'] = $this->input->post('id_salary_bonus');
        $data['amount_salary_bonus'] = $this->input->post('amount_salary_bonus');
        $this->master_model->update_info('salary_bonus',$data,$id_bonus);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully UPdated!!</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/edit_salary_bonus'.$id_bonus);
    }
    
     public function delete_salary_bonus_by_bonus_id($bonus_id) {
        $this->master_model->delete_salary_info('salary_payment',$bonus_id);
        redirect('master_controller/salary_bonus_list');
    }
//    salary bonus ends

    //salary Advance
    public function salary_advance(){
        $data = array();
        $data['title'] = "Accounts|Salary Advance";
        $data['main_content'] = $this->load->view('salary/salary_advance',$data,true);
        $this->load->view('master',$data);
    }
    
    public function salary_advance_list(){
        $data = array();
        $data['title'] = "Accounts|Salary Advance";
        $data['salary_advance_list'] = $this->master_model->select_all('salary_advance');
        $data['main_content'] = $this->load->view('salary/salary_advance_list',$data,true);
        $this->load->view('master',$data);
    }
    
    public function edit_salary_advance($advance_id){
        $data = array();
        $data['title'] = "Accounts|Salary Advance";
        $data['salary_advance'] = $this->master_model->edit_info('salary_advance',$advance_id,'id_salary_advance');
        $data['main_content'] = $this->load->view('salary/salary_advance_edit',$data,true);
        $this->load->view('master',$data);
    }
    
    public function save_advance(){
        $data = array();
        $data['amount_given_salary_advance'] = $this->input->post('amount_given_salary_advance');
        $data['amount_paid_salary_advance'] = $this->input->post('amount_paid_salary_advance');
        $data['date_given_salary_advance'] = date('y-m-d',strtotime($this->input->post('date_given_salary_advance')));
        $this->master_model->save_info('salary_advance',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_advance');
    }
    public function update_advance(){
        $data = array();
        $id_advance = $this->input->post('id_salary_advance');
        $data['amount_given_salary_advance'] = $this->input->post('amount_given_salary_advance');
        $data['amount_paid_salary_advance'] = $this->input->post('amount_paid_salary_advance');
        $data['date_given_salary_advance'] = date('y-m-d',strtotime($this->input->post('date_given_salary_advance')));
        $this->master_model->update_info('salary_advance',$data,$id_advance);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_advance_list');
    }
    
    public function delete_salary_advance_by_advance_id($advance_id) {
        $this->master_model->delete_salary_info('salary/salary_advance',$advance_id);
        redirect('master_controller/salary_advance_list');
    }
    
    
    
    //salary Advance payment
    public function salary_advance_payment(){
        $data = array();
        $data['title'] = "Accounts|Salary Advance Payment";
        $data['main_content'] = $this->load->view('salary_advance_payment',$data,true);
        $this->load->view('master',$data);
    }
    
     public function salary_advance_payment_list(){
        $data = array();
        $data['title'] = "Accounts|Salary Advance Payment";
        $data['salary_advance_payment_list'] = $this->master_model->select_all('salary_advance_payment');
        $data['main_content'] = $this->load->view('salary/salary_advance_payment_list',$data,true);
        $this->load->view('master',$data);
    }
    
    public function edit_salary_advance_payment($advance_id){
        $data = array();
        $data['title'] = "Accounts|Salary Advance Payment";
        $data['salary_advance_payment'] = $this->master_model->edit_info('salary_advance_payment',$advance_id,'id_salary_advance');
        $data['main_content'] = $this->load->view('salary/salary_advance_edit',$data,true);
        $this->load->view('master',$data);
    }
    
    public function save_advance_payment(){
        $data = array();
        $data['id_salary_advance'] = $this->input->post('id_salary_advance');
        $data['paid_amount_salary_advance_payment'] = $this->input->post('paid_amount_salary_advance_payment');
        $data['payemnt_date_salary_advance_payment'] = date('y-m-d',strtotime($this->input->post('payemnt_date_salary_advance_payment')));
        $this->master_model->save_info('salary_advance_payment',$data);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_advance_payment');
    }
    
    public function update_advance_payment(){
        $data = array();
        $id_advance_payment = $this->input->post('id_salary_advance_payment');
        $data['id_salary_advance'] = $this->input->post('id_salary_advance');
        $data['paid_amount_salary_advance_payment'] = $this->input->post('paid_amount_salary_advance_payment');
        $data['payemnt_date_salary_advance_payment'] = date('y-m-d',strtotime($this->input->post('payemnt_date_salary_advance_payment')));
        $this->master_model->update_info('salary_advance_payment',$data,$id_advance_payment);
        
        $sdata = array();
        $sdata['message'] = '<div class = "alert alert-success"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Data is successfully Saved</p></div>';
        $this->session->set_userdata($sdata);
        redirect('master_controller/salary_advance_payment');
    }
    
    public function delete_salary_advance_payment_by_advance_id($advance_id) {
        $this->master_model->delete_salary_info('salary_advance_payment',$advance_id);
        redirect('master_controller/salary_advance_payment_list');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */