<?php
require('header.php');
// session_start();
// require('../Database/farmer_class.php');
if(!isset($_SESSION['reg_id']))
{
	header('location:../Login.php');
}



$farmer=new farmer_class();

	if(isset($_POST['edit_catagory']))
	{
		$cat_name=$_POST['cat_name'];
		$cat_description=$_POST['cat_description'];
		echo $cat_id=$_POST['cat_id'];

		$catogory=$farmer->Update_catogory($cat_name,$cat_description,$cat_id);
		 // print_r($login);
		
		if($catogory)
		{
			$_SESSION['Update_catogory']="<h5 style='color:green;text-align:center'>Sucessfully updated one catogory...</h5><br><br>";
			header('location:view_catagory.php');
		}
		else
		{
			$_SESSION['Update_catogory']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_catagory.php');
		}


	}
?>