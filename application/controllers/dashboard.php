<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('user_logged_in')==false)redirect('home');
        $this->load->model('loan_model');
    }

    function loan_list(){
    	$this->data['title'] = 'Loan List';
    	$this->data['content'] = 'content/customer/list';
    	$customer_id = $this->session->userdata('user_id');
    	$this->data['lists'] = $this->loan_model->loan_list($customer_id);
    	$this->load->view('common/body', $this->data);
    }
}