<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

    function index(){
        $remember = $this->admin_model->login_user($this->session->userdata('user_username'), $this->session->userdata('user_password'));
        if($remember != NULL){
            $sess_admin = array(
                    'user_logged_in' => true,
                    'user_id' => $remember['id'],
                    'user_username' => $remember['username']
                );
            $this->session->set_userdata($sess_admin);
            redirect('home');
        }
        $this->data['title'] = 'Login';
    	$this->data['content'] = 'content/register/login';
    	$this->load->view('common/body', $this->data);
    }

    function do_login(){
        $user = $this->input->post('name');
        $pass = md5($this->input->post('pass'));
        $remember_me = $this->input->post('remember_me');

        if(!$user || !$pass){
            $this->session->set_flashdata('notif','Invalid Username or Password');
            redirect('login');
        }
        else{
            $login = $this->admin_model->login_user($user, $pass);
            if ($login != NULL) {
                $sess_admin = array(
                    'user_logged_in' => true,
                    'user_id' => $login['id'],
                    'user_username' => $login['username']
                );
                $sess_data = array(
                    'user_logged_in' => true,
                    'user_password' => $login['password'],
                    'user_username' => $login['username']
                );
                if($remember_me == 1){
                    $this->session->set_userdata('remember_me', TRUE);
                    $this->session->set_userdata($sess_data);

                } elseif($remember_me == 0){

                    $this->session->unset_userdata($sess_data);

                }

                $this->session->set_userdata($sess_admin);
                redirect('home');
            }
            else {
                $this->session->set_flashdata('notif','Invalid Username or Password');
                redirect('login');
            }
        }
    }

    function do_register(){
    	$fullname = $this->input->post('fullname');
    	$username = $this->input->post('username');
    	$password = md5(strtolower($this->input->post('password')));
    	$confirm_password = md5(strtolower($this->input->post('confirm_password')));

    	if($password !== $confirm_password){
    		$this->session->set_flashdata('back','Silahkan isi password anda dengan benar!');
    		redirect($_SERVER['HTTP_REFERER']);
    	}
    	$register = array(
    		'personal_full_name' => $fullname,
    		'username' => $username,
    		'password' => $password,
    		);

    	$this->session->set_userdata($register);
    	redirect('step_loan');
    }

}