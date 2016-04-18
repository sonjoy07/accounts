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

    public function index() {
        $data = array();
        $data['title'] = "Accounts";
        $data['salary'] = $this->master_model->select_all_salary_amount();
        $data['main_content'] = $this->load->view('salary_table',$data,true);
        $this->load->view('master',$data);
    }
    
    public function salary_amount(){
        $data = array();
        $data['title'] = "Accounts|Salary";
        $data['main_content'] = $this->load->view('salary_amount',$data,true);
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
    
    

    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */