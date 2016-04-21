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
        $this->load->library('grocery_CRUD');
    }
//salary payment starts
    public function index() {
        $salary = new Grocery_CRUD();
        $salary->set_table('salary_payment')
                ->display_as('id_employee','Employe Name')
                ->set_subject('Salary Payment')
                ->set_relation('id_employee', 'employee', 'name_employee');
        $output = $salary->render();
        $data['title'] = "Accounts";
        $data['heading'] = "Salary Management";
        //$data['salary'] = $this->master_model->select_all('salary_payment');
        $data['main_content'] = $this->load->view('salary/salary_table',$output,true);
        $this->load->view('master',$data);
    }
//    salary payment ends
    
    
//    salary bonus type starts
    
    public function salary_bonus_type_list(){
        $salary = new Grocery_CRUD();
        $salary->set_table('salary_bonus_type')
                ->set_subject('Salary Bonus Type');
        $output = $salary->render();
        $data['title'] = "Accounts|Salary Bonus";
        $data['heading'] = "Salary Bonus Type";
        $data['main_content'] = $this->load->view('salary/salary_bonus_type_list',$output,true);
        $this->load->view('master',$data);
    }
    
    
 //salary bonus type ends
    
//    salary bonus starts
    
    public function salary_bonus_list(){
        $salary = new Grocery_CRUD();
        $salary->set_table('salary_bonus')
                ->set_subject('Salary Bonus')
                ->display_as('id_salary_payment','Amount Salary Payment')
                ->display_as('id_salary_bonus_type','Name Salary Bonus Type')
                ->set_relation('id_salary_payment','salary_payment','amount_salary_payment')
                ->set_relation('id_salary_bonus_type','salary_bonus_type','name_salary_bonus_type');
        $output = $salary->render();
        $data['title'] = "Accounts|Salary Bonus";
        $data['heading'] = "Salary Bonus";
        $data['main_content'] = $this->load->view('salary/salary_bonus_list',$output,true);
        $this->load->view('master',$data);
    }
    
//    salary bonus ends

    //salary Advance
    
    public function salary_advance_list(){
        $salary = new Grocery_CRUD();
        $salary->set_table('salary_advance')
                ->set_subject('Salary Advance')
                ->display_as('id_employee','Employee Name')
                ->set_relation('id_employee','employee','name_employee');
        $output = $salary->render();
        $data['title'] = "Accounts|Salary Advance";
        $data['heading'] = "Salary Advance";
        $data['salary_advance_list'] = $this->master_model->select_all('salary_advance');
        $data['main_content'] = $this->load->view('salary/salary_advance_list',$output,true);
        $this->load->view('master',$data);
    }
   
    
    //salary Advance payment
    
    
     public function salary_advance_payment_list(){
        $salary = new Grocery_CRUD();
        $salary->set_table('salary_advance_payment')
                ->set_subject('Salary Advance Payment')
                ->display_as('id_salary_advance','Amount Given Salary Advance')
                ->set_relation('id_salary_advance','salary_advance','amount_given_salary_advance');
        $output = $salary->render();
        $data['title'] = "Accounts|Salary Advance Payment";
        $data['heading'] = "Salary Advance Payment";
        $data['main_content'] = $this->load->view('salary/salary_advance_payment_list',$output,true);
        $this->load->view('master',$data);
    }
    
    
    
    //Employee
    public function employee(){
        $data = array();
        $data['title'] = "Accounts| Employee";
        $data['main_content'] = $this->load->view('employee',$data,true);
        $this->load->view('master',$data);
    }
    
    public function employee_list(){     
        $salary = new grocery_CRUD();
        $salary->set_table('employee')
                //->set_theme('datatables')
                ->set_subject('Salary Payment');
        $output = $salary->render();
        $data['title'] = "Accounts| Employee";
        $data['main_content'] = $this->load->view('employee',$output,true);
        $this->load->view('master',$data);
 
//        echo "<pre>";
//        print_r($output);
//        echo "</pre>";
//        die();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */