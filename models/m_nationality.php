<?php

require_once('lib/DBClass.php');

class Nationality{

	private $db;

	public function Nationality(){
		$this->db = new DBClass();
	}

	public function readAllNationality(){
		$query = "Select * from nationality";
		return $this->db->getRows($query);	
	}
	
	public function deleteNationality($id){
		$sql = "Delete from siswa Where id_nationality=$id";
		$this->db->putRows($sql);		
	}
	
	public function updateNationality($data){
		$id = $data['input_id'];
		$code = $data['input_code'];
		$nation = $data['input_nationality'];
		
		$query = "update nationality set id_nationality='$id', code='$code', nationality='$nation'";
		$this->db->putRows($query);		
	}
	
}