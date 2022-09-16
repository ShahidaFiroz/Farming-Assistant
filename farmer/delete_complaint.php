<?php
session_start();
// require('header.php');

require('../Database/farmer_class.php');

$farmer=new farmer_class();

if (isset($_GET['com_id']))
{
	$com_id=$_GET['com_id'];
	// $Complaints=array();
  $Complaints=$farmer->delete_complaint($com_id);
 // print_r($Complaints);

 if($Complaints)
		{
			$_SESSION['delete_com']="<h5 style='color:green;text-align:center'>Sucessfully Deleted one Instruction...</h5><br><br>";
			header('location:view_instruction.php');
		}
		else
		{
			$_SESSION['delete_com']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_product.php');
		}
 // exit();
}

?>