<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'Email';
    	$this->data['content'] = 'content/email/email';
    	$this->load->view('common/body', $this->data);
    }

}