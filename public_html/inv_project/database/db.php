<?php


class Database
{
	
	private $conn;
	public function connect(){
		include_once('constants.php');		
		$this->conn=new Mysqli(HOST,USER,PASS,DB);
		if($this->conn){
			echo "connect";
			return $this->conn;
		}
		echo "connection fail";
	}
}
$db=new Database();
$db->connect();
?>