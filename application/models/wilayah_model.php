<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Wilayah_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function lokasi(){
		$sql = "SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function kota($id){
		$sql = "SELECT * FROM inf_lokasi where lokasi_propinsi= ".$id." and lokasi_kecamatan=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota!=0 order by lokasi_nama";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function kec($id, $d){
		$sql = "SELECT * FROM inf_lokasi where lokasi_propinsi=".$id." and lokasi_kecamatan!=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota=".$d." order by lokasi_nama";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}?>