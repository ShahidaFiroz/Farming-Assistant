<?php
class database
{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname="farming_assistant";
	public $con;
	
	// Create connection
	public function __construct()
	{
		$con = new MySQLi($this->servername, $this->username, $this->password,$this->dbname);
		$this->con =$con;
		$this->check_err($con);
	}
	public function check_err($con)
	{
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
		} 
		else{
			//echo "Connected successfully";
		}
	}
	
}
$obj=new database();
 //Check connection

	
?>