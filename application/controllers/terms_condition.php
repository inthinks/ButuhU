<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Terms_condition extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'Terms and Conditions';
    	$this->data['content'] = 'content/terms/terms';
    	$this->load->view('common/body', $this->data);
    }
}