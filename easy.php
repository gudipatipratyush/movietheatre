<?php

class events {
	private $connect;
	
	public function __construct(){
		$this->connect = new MySQLi("localhost","root","","theatre");
	}
	
	public function insertQuery($sql){
		$this->connect->query($sql);
		return $this->connect->insert_id;
	}
	
 	public	function  updatequery($sql){
		$this->connect->query($sql);
	}
	
	public function deletequery($sql){
		$this->connect->query($sql);
	}
	
	public function selectquery($sql){
		$query = $this->connect->query($sql);
		$records = array();
		while($row = $query->fetch_assoc()){
			$records[] = $row;	
		}

		return $records;
	}
}
?>
