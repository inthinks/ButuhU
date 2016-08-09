<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Faq extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'FAQ';
    	$this->data['content'] = 'content/faq/faq';
    	$this->load->view('common/body', $this->data);
    }
}