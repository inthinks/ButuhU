<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Aboutus extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'about us';
    	$this->data['content'] = 'content/aboutus/about';
    	$this->load->view('common/body', $this->data);
    }
}