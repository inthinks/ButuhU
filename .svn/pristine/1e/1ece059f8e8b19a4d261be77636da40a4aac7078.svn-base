<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Setting_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function data(){
		$sql = "SELECT * FROM setting_tb";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	function bankList(){
		$sql = "SELECT * FROM bank_tb";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}?>