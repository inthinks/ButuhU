<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('setting_model');
        $this->load->model('general_model');
    }

    function index(){
        $this->data['title'] = 'Index';
        $this->data['data'] = $this->setting_model->data();
    	$this->data['content'] = 'content/home/home';
    	$this->load->view('common/body', $this->data);
    }

    function destroy(){
    	$this->session->sess_destroy();
    	redirect('home');
    }

    function do_loan(){
        $la = $this->input->post('la');
        $length = $this->input->post('length');
        $interest= $this->input->post('interest');
        $repayable = $this->input->post('repayable');
        $due_date = $this->input->post('due_date');
        $date = date('Y-m-d H-i-s');

        $loan = array(
            'loan_amount' => $la,
            'loan_length' => $length,
            'interest_fee' => $interest,
            'due_date' => $due_date,
            'total_repayable' => $repayable,
            'customer_id' => $this->session->userdata('user_id'),
            'created_date' => $date,
            );
        // pre($loan); exit();


        if($this->session->userdata('user_logged_in')==false){
            $this->session->set_flashdata('alert', 'Silahkan Login atau Register terlebih Dahulu untuk pengajuan');
            redirect('login');
            } else {
                $table = 'loan_tb';
                $this->general_model->insert_data($table, $loan);
                $this->session->set_flashdata('alert', 'Permintaan Berhasil, Silahkan Tunggu Approval dari Kami.');
                redirect('dashboard/loan_list');
            }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}