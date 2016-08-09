<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Privacy extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'Privacy and Policy';
    	$this->data['content'] = 'content/privacy/privacy';
    	$this->load->view('common/body', $this->data);
    }
}