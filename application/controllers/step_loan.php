<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Step_loan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('general_model');
        $this->load->model('setting_model');
    }

    function index(){
        if(!($this->session->userdata('username'))) {
            redirect('login');
        }
        $this->data['title'] = 'Register';
        $this->data['data'] = $this->setting_model->data();
    	$this->data['content'] = 'content/register/step1';
        $this->load->view('common/body', $this->data);
    }

    function do_step_1(){

        //get session register
    	$period = $this->input->post('period');
    	$nilai = $this->input->post('nilai');

        //get session loan
        $loan_amount = $this->input->post('loan_amount');
        $loan_length = $this->input->post('loan_length');
        $fee = $this->input->post('interest_fee');
        $total = $this->input->post('total_repayable');
        $due_date = $this->input->post('due_date');

    	$step1 = array(
    		'periode' => $period,
    		'nilai' => $nilai,
    		);

        $loan = array(
            'loan_amount' => $loan_amount,
            'loan_length' => $loan_length,
            'interest_fee' => $fee,
            'total_repayable' => $total,
            'due_date' => $due_date,
            );

    	$this->session->set_userdata($step1);
        $this->session->set_userdata($loan);
        
    	redirect('step_loan/step_2');
    }

    function step_2(){
        if(!($this->session->userdata('loan_amount'))){
            redirect('login');}
        $this->data['title'] = 'Register';
        $this->data['content'] = 'content/register/step2';
        $this->load->view('common/body', $this->data);
    }

    function do_step_2(){
        $fullname = $this->input->post('fullname');
        $gender = $this->input->post('gender');
        $pob = $this->input->post('pob');
        $bod = date('Y-m-d', strtotime(str_replace('-','/',$this->input->post('bod'))));
        $religion = $this->input->post('religion');
        $education = $this->input->post('education');
        $martial = $this->input->post('marital');
        $dependent = $this->input->post('dependent');
        $race = $this->input->post('race');

        $step2 = array(
            'personal_gender' => $gender,
            'personal_birth_place' => $pob,
            'personal_birth_date' => $bod,
            'personal_religion' => $religion,
            'personal_education' => $education,
            'personal_martial_status' => $martial,
            'personal_dependents' => $dependent,
            'personal_race' => $race,
            );
        $this->session->set_userdata($step2);
        
        redirect('step_loan/step_3');
    }

    function step_3(){
        if(!($this->session->userdata('personal_full_name')) && !($this->session->userdata('loan_amount'))){
            redirect('login');}
        $this->load->model('wilayah_model');
        $this->data['title'] = 'Register';
        $this->data['wilayah'] = $this->wilayah_model->lokasi();
        $this->data['content'] = 'content/register/step3';
        $this->load->view('common/body', $this->data);
    }

    function kota($id){
        $this->load->model('wilayah_model');
        $content = '';
        $provinsi = $this->wilayah_model->kota($id);
        // $content .= "<select name='city' class='validate[required]'>";
        $content .= "<option selected value=''>Pilih Kota/Kab</option>";
        foreach($provinsi as $d){
            $content .= "<option value='$d[lokasi_nama]' data='$d[lokasi_kabupatenkota]'>$d[lokasi_nama]</option>";
        }
        echo $content;
        // $this->output->set_output(json_encode($content));
    }

    function kec($id, $d){
        $this->load->model('wilayah_model');
        $provinsi = $this->wilayah_model->kec($id, $d);
        $content ='';
        $content .="<option selected value=''>Pilih Kecamatan</option>";
        foreach($provinsi as $d){
            $content .= "<option value='$d[lokasi_nama]'>$d[lokasi_nama]</option>";
        }
        echo $content;
    }


    function do_step_3(){

        $personal_id = $this->input->post('p_id');
        $m_number0 = $this->input->post('m_number0');
        $m_number1 = $this->input->post('m_number1');
        $address = $this->input->post('address');
        $home_status = $this->input->post('home_status');
        $how_long_year = $this->input->post('how_long_year');
        $how_long_month = $this->input->post('how_long_month');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $sub_district = $this->input->post('sub_district');
        $post_code = $this->input->post('post_code');
        $phone_number = $this->input->post('phone_number');

        //Domicile address is similiar with above address
        
        $personal_id_ = $this->input->post('p_id_');
        $m_number0_ = $this->input->post('m_number0_');
        $m_number1_ = $this->input->post('m_number1_');
        $address_ = $this->input->post('address_');
        $home_status_ = $this->input->post('home_status_');
        $how_long_year_ = $this->input->post('how_long_year_');
        $how_long_month_ = $this->input->post('how_long_month_');
        $province_ = $this->input->post('province_');
        $city_ = $this->input->post('city_');
        $sub_district_ = $this->input->post('sub_district_');
        $post_code_ = $this->input->post('post_code_');
        $phone_number_ = $this->input->post('phone_number_');

        $domicile = $this->input->post('domicile');

        //closest family data 
        $f_name = $this->input->post('f_name');
        $f_address = $this->input->post('f_address');
        $f_province = $this->input->post('f_province');
        $f_city = $this->input->post('f_city');
        $f_district = $this->input->post('f_district');
        $f_post_code = $this->input->post('f_post_code');
        $f_phone_number = $this->input->post('f_phone_number');
        
        $step3 = array(
            //personal data
            'personal_id' => $personal_id,
            'personal_mobile_number' => $m_number0,
            'personal_mobile_number2' => $m_number1,
            'personal_address' => $address,
            'personal_home_status' => $home_status,
            'personal_length_years' => $how_long_year,
            'personal_length_months' => $how_long_month,
            'personal_province' => $province,
            'personal_city' => $city,
            'personal_sub_district' => $sub_district,
            'personal_post_code' => $post_code,
            'personal_home_phone_number' => $phone_number,

            //similar domicile
            'similiar_domicile' => $domicile,

            //domicile data
            'personal_domicile_id' => $personal_id_,
            'personal_domicile_mobile_number' => $m_number0_,
            'personal_domicile_mobile_number2' => $m_number1_,
            'personal_domicile_address' => $address_,
            'personal_domicile_home_status' => $home_status_,
            'personal_domicile_length_years' => $how_long_year_,
            'personal_domicile_length_months' => $how_long_month_,
            'personal_domicile_province' => $province_,
            'personal_domicile_city' => $city_,
            'personal_domicile_sub_district' => $sub_district_,
            'personal_domicile_post_code' => $post_code_,
            'personal_domicile_home_phone_number' => $phone_number_,

            //Family data
            'relative_full_name' => $f_name,
            'relative_address' => $f_address,
            'relative_province' => $f_province,
            'relative_city' => $f_city,
            'relative_sub_district' => $f_district,
            'relative_post_code' => $f_post_code,
            'relative_home_phone_number' => $f_phone_number, 
            );

        $this->session->set_userdata($step3);
        redirect('step_loan/step_4');
    }

    function step_4(){
        if(!($this->session->userdata('personal_full_name')) && !($this->session->userdata('loan_amount')) && !($this->session->userdata('personal_id'))){
            redirect('login');}
        $this->data['title'] = 'Register';
        $this->data['list'] = $this->setting_model->bankList();
        $this->data['content'] = 'content/register/step4';
        $this->load->view('common/body', $this->data);
    }

    function do_step_4(){

        $bank_name = $this->input->post('bank_name');
        $account_name = $this->input->post('account_name');
        $account_number = $this->input->post('account_number');

        $step4 = array(
            'bank_name' => $bank_name,
            'bank_account_name' => $account_name,
            'bank_account_number' => $account_number,
            );

        $this->session->set_userdata($step4);
        redirect('step_loan/step_5');
    }

    function step_5(){
        if(!($this->session->userdata('personal_full_name')) && !($this->session->userdata('loan_amount')) && !($this->session->userdata('personal_id')) && !($this->session->userdata('bank_name'))){
            redirect('login');}
        $this->data['title'] = 'Register';
        $this->data['content'] = 'content/register/step5';
        $this->load->view('common/body', $this->data);
    }

    function do_step_5(){
        //employment data
        $type = $this->input->post('type');
        $name = $this->input->post('name');
        $role = $this->input->post('role');
        $address = $this->input->post('address');
        $income = $this->input->post('income');
        $phone_number = $this->input->post('phone_number');
        $year = $this->input->post('year');
        $month = $this->input->post('month');
        $expenses = $this->input->post('expenses');
        $house_loan = $this->input->post('house_loan');
        $purpose = $this->input->post('purpose');
        $knowing = $this->input->post('knowing');

        $step5 = array(
            'employment_type' => $type,
            'employment_company_name' => $name,
            'employment_company_role' => $role,
            'employment_company_address' => $address,
            'employment_company_phone_number' => $phone_number,
            'main_monthly_income' => $income,
            'employment_length_years' => $year,
            'employment_length_months' => $month,
            'house_of_loan' => $house_loan,
            'main_expenses' => $expenses,
            'purpose_of_loan' => $purpose,
            'knowing_butuh_uang' => $knowing,
            );
        
        $this->session->set_userdata($step5);
        redirect('step_loan/step_6');
    }

    function step_6(){
        if(!($this->session->userdata('personal_full_name')) && !($this->session->userdata('loan_amount')) && !($this->session->userdata('personal_id')) && !($this->session->userdata('bank_name')) && !($this->session->userdata('knowing_butuh_uang'))){
            redirect('login');}
        $this->data['title'] = 'Register';
        $this->data['content'] = 'content/register/step6';
        $this->load->view('common/body', $this->data);
    }

    function do_step_6(){
        // pre($this->session->userdata());die;
        $agree0 = $this->input->post('agree0');
        $agree1 = $this->input->post('agree1');
        $agree2 = $this->input->post('agree2');
        $agree3 = $this->input->post('agree3');
        $agree4 = $this->input->post('agree4');
                

        if($agree0 == 0 or $agree1 == 0 or $agree2 == 0 or $agree3 == 0 or $agree4 == 0){
            $this->session->set_flashdata('agree0','Anda harus menyetujui seluruh persetujuan ini');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $step6 = array(
            'agree0' => $agree0,
            'agree1' => $agree1,
            'agree2' => $agree2,
            'agree3' => $agree3,
            'agree4' => $agree4,
            );

        $this->session->set_userdata($step6);
        redirect('step_loan/step_phone');
    }

    function step_phone(){
        pre($this->session->all_userdata()); die;
        if(!($this->session->userdata('personal_full_name')) && !($this->session->userdata('loan_amount')) && !($this->session->userdata('personal_id')) && !($this->session->userdata('bank_name')) && !($this->session->userdata('knowing_butuh_uang'))){
            redirect('login');}
            $phone = $this->input->post('phone');

        if ($_POST){

            $step_verify = array(
                'phone_verification' => $phone,
            );
            $this->session->set_userdata($step_verify);

            $date = date('Y-m-d H:i:s');
            $date_insert = array('created_date' => $date);
            $data = array(
                //step 1
                'personal_full_name' => $this->session->userdata('personal_full_name'),
                'username' => $this->session->userdata('username'),
                'password' => $this->session->userdata('password'),

                //step 2
                'personal_gender' => $this->session->userdata('personal_gender'),
                'personal_birth_place' => $this->session->userdata('personal_birth_place'),
                'personal_birth_date' => $this->session->userdata('personal_birth_date'),
                'personal_religion' => $this->session->userdata('personal_religion'),
                'personal_education' => $this->session->userdata('personal_education'),
                'personal_martial_status' => $this->session->userdata('personal_martial_status'),
                'personal_dependents' => $this->session->userdata('personal_dependents'),
                'personal_race' => $this->session->userdata('personal_race'),

                //step 3
                //personal data
                'personal_id' => $this->session->userdata('personal_id'),
                'personal_mobile_number' => $this->session->userdata('personal_mobile_number'),
                'personal_mobile_number2' => $this->session->userdata('personal_mobile_number2'),
                'personal_address' => $this->session->userdata('personal_address'),
                'personal_home_status' => $this->session->userdata('personal_home_status'),
                'personal_length_years' => $this->session->userdata('personal_length_years'),
                'personal_length_months' => $this->session->userdata('personal_length_months'),
                'personal_province' => $this->session->userdata('personal_province'),
                'personal_city' => $this->session->userdata('personal_city'),
                'personal_sub_district' => $this->session->userdata('personal_sub_district'),
                'personal_post_code' => $this->session->userdata('personal_post_code'),
                'personal_home_phone_number' => $this->session->userdata('personal_home_phone_number'),

                //similar domicile
                'similiar_domicile' => $this->session->userdata('similiar_domicile'),

                //domicile data
                'personal_domicile_id' => $this->session->userdata('personal_domicile_id'),
                'personal_domicile_mobile_number' => $this->session->userdata('personal_domicile_mobile_number'),
                'personal_domicile_mobile_number2' => $this->session->userdata('personal_domicile_mobile_number2'),
                'personal_domicile_address' => $this->session->userdata('personal_domicile_address'),
                'personal_domicile_home_status' => $this->session->userdata('personal_domicile_home_status'),
                'personal_domicile_length_years' => $this->session->userdata('personal_domicile_length_years'),
                'personal_domicile_length_months' => $this->session->userdata('personal_domicile_length_months'),
                'personal_domicile_province' => $this->session->userdata('personal_domicile_province'),
                'personal_domicile_city' => $this->session->userdata('personal_domicile_city'),
                'personal_domicile_sub_district' => $this->session->userdata('personal_domicile_sub_district'),
                'personal_domicile_post_code' => $this->session->userdata('personal_domicile_post_code'),
                'personal_domicile_home_phone_number' => $this->session->userdata('personal_domicile_home_phone_number'),

                //Family data
                'relative_full_name' => $this->session->userdata('relative_full_name'),
                'relative_address' => $this->session->userdata('relative_address'),
                'relative_province' => $this->session->userdata('relative_province'),
                'relative_city' => $this->session->userdata('relative_city'),
                'relative_sub_district' => $this->session->userdata('relative_sub_district'),
                'relative_post_code' => $this->session->userdata('relative_post_code'),
                'relative_home_phone_number' => $this->session->userdata('relative_home_phone_number'),

                //step 4
                'bank_name' => $this->session->userdata('bank_name'),
                'bank_account_name' => $this->session->userdata('bank_account_name'),
                'bank_account_number' => $this->session->userdata('bank_account_number'),

                //step 5
                'employment_type' => $this->session->userdata('employment_type'),
                'employment_company_name' => $this->session->userdata('employment_company_name'),
                'employment_company_role' => $this->session->userdata('employment_company_role'),
                'employment_company_address' => $this->session->userdata('employment_company_address'),
                'employment_company_phone_number' => $this->session->userdata('employment_company_phone_number'),
                'main_monthly_income' => $this->session->userdata('main_monthly_income'),
                'employment_length_years' => $this->session->userdata('employment_length_years'),
                'employment_length_months' => $this->session->userdata('employment_length_months'),
                'house_of_loan' => $this->session->userdata('house_of_loan'),
                'main_expenses' => $this->session->userdata('main_expenses'),
                'purpose_of_loan' => $this->session->userdata('purpose_of_loan'),
                'knowing_butuh_uang' => $this->session->userdata('knowing_butuh_uang'),

                'created_date' => $date,
            );

            $table = 'customer_list_tb';
            $table1 = 'loan_tb';
            
            $this->general_model->insert_data($table, $data);
            $customer_id = $this->db->insert_id();
            $id = array(
                    'customer_id' => $customer_id,
                    'created_date' => $date,  
                  );

            $data1 = array(
                'customer_id' => $customer_id,
                'created_date' => $date,  
                'loan_amount' => $this->session->userdata('loan_amount'),
                'loan_length' => $this->session->userdata('loan_length'),
                'interest_fee' => $this->session->userdata('interest_fee'),
                'total_repayable' => $this->session->userdata('total_repayable'),
                'due_date' => $this->session->userdata('due_date'),
            );
            
            $this->general_model->insert_data($table1, $data1);   
            $this->session->sess_destroy();
            $this->session->set_flashdata('notif', 'Silahkan login untuk mengajukan Peminjaman');

            redirect('step_loan/finished');
        }

        $this->data['title'] = 'Register';
        $this->data['content'] = 'content/register/phone';
        $this->load->view('common/body', $this->data);
    }

    function finished(){
        $this->data['title'] = 'Register';
        $this->data['content'] = 'content/register/finish';
        $this->load->view('common/body', $this->data);
    }

}