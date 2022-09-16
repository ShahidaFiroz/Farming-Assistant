<?php

session_start();
require('../Database/farmer_class.php');
// require ('../Database/common_code.php');

if(!isset($_SESSION['log_id']))
{
	header('location:../Login.php');
}



$farmer=new farmer_class();

	if(isset($_POST['editprofile']))
	{
		$reg_name=$_POST['reg_name'];
		$reg_address=$_POST['reg_address'];
		$reg_email=$_POST['reg_email'];
		$reg_phone=$_POST['reg_phone'];
		
		$reg_place=$_POST['reg_place'];
		$log_username=$_POST['log_username'];
		$log_password=$_POST['log_password'];
		 $log_id=$_SESSION['log_id'];

		$list=$farmer->profile_edit( $reg_name,$reg_address,$reg_email,$reg_phone,$reg_place,$log_username,$log_password,$log_id);
		  // print_r($log_id);
		
		if($list)
		{
			$_SESSION['editprofile']="<h5 style='color:green;text-align:center'>Sucessfully updated your Profile...</h5><br><br>";
			header('location:home.php');
		}
		else
		{
			$_SESSION['editprofile']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:home.php');
		}
	}


	
?>