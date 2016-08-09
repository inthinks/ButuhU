<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Fees extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'Fees and Charge';
    	$this->data['content'] = 'content/f&c/fees';
    	$this->load->view('common/body', $this->data);
    }
}