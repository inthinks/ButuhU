<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Contactus extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model('customer_model');
    }

    function index(){
    	$this->data['title'] = 'Contact us';
    	$this->data['content'] = 'content/contactus/contactus';
    	$this->load->view('common/body', $this->data);
    }

    function email(){
		
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$no_telp=$this->input->post('no_telp');
		$pertanyaan=$this->input->post('pertanyaan');

		$listEmails = array('indra@isysedge.com'
			);
		$to_email = $listEmails; 
		$subject = '[BUTUHUANG] Contact Us';
		$email_content = 
		'Nama: '.$name.'<br/>'.
		'Email: '.$email.'<br/>'.
		'No. Telp: '.$no_telp.'<br/>'.
		'Pertanyaan: '.$pertanyaan;

		// if($name && $email && $no_telp && $pertanyaan){
		// if($_POST){
		$this->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "indra@isysedge.com";
		$config['smtp_pass'] = "isyspassword";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to($to_email);

		$this->email->subject($subject);
		$this->email->message($email_content);
		if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }
		}

	
}