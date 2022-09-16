<?php
// require('header.php');
session_start();
require('../Database/farmer_class.php');
if(!isset($_SESSION['reg_id']))
{
	header('location:../Login.php');
}



$farmer=new farmer_class();

	if(isset($_POST['edit_instruction']))
	{
		$ins_growing_period=$_POST['ins_growing_period'];
  $ins_fertiliser=$_POST['ins_fertiliser'];
  $ins_description=$_POST['ins_description'];
  $ins_id=$_POST['ins_id'];

		$catogory=$farmer->Update_ins($ins_growing_period,$ins_fertiliser,$ins_description,$ins_id);
		 // print_r($login);
		
		if($catogory)
		{
			$_SESSION['add_ins_msg']="<h5 style='color:green;text-align:center'>Sucessfully updated one Instruction...</h5><br><br>";
			header('location:view_instruction.php');
		}
		else
		{
			$_SESSION['add_ins_msg']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_instruction.php');
		}


	}
?>