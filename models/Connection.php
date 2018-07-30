<?php  
class Connection{
	public function connect(){
		$conn = new PDO("mysql:host=localhost;dbname=taskboard","root","");
		return $conn;
	}
}
?>