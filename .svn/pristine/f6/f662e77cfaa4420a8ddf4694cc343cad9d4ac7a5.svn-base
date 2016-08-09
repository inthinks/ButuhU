<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Loan_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function loan_list($customer_id){
		$sql = "select * from loan_tb where customer_id = '".$customer_id."' ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function data(){
		$sql = "SELECT a.personal_full_name, a.phone_verification, b.* FROM loan_tb b join customer_list_tb a on a.id = b.customer_id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function accept($loan){
		$sql = "select * from loan_tb where customer_id = '".$customer_id."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}




}?>