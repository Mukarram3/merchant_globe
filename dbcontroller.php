<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
class DBController {

//	private $host = "otherdb.cr5c75krfrga.ap-southeast-1.rds.amazonaws.com";
//	private $user = "merchantglob";
//	private $password = "Jshdkhwu%%gsvqhWeav";
//	private $database = "merchantsglobe";


	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "merchantsglobe";

	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	function insertQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if($result === True){
		// echo "New record created successfully";
	  } else {
		// echo "not inserted";
	  }
	//   return $result;
	}
}
?>