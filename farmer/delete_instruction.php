<?php
session_start();
// require('header.php');

require('../Database/farmer_class.php');

$farmer=new farmer_class();

if (isset($_GET['ins_id']))
{
	$ins_id=$_GET['ins_id'];
	// $Insructions=array();
  $Insructions=$farmer->delete_ins($ins_id);
 // print_r($Insructions);

 if($Insructions)
		{
			$_SESSION['delete_com']="<h5 style='color:green;text-align:center'>Sucessfully Deleted one Complaint...</h5><br><br>";
			header('location:view_complaint.php');
		}
		else
		{
			$_SESSION['delete_ins']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_complaint.php');
		}
 // exit();
}

?>