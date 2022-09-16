<?php
// session_start();
require('header.php');
// require('../Database/farmer_class.php');

$farmer=new farmer_class();

if (isset($_GET['cat_id']))
{
	$cat_id=$_GET['cat_id'];
	$catogory=array();
  $catogory=$farmer->delete_catagory($cat_id);
 // print_r($Catogory);

 if($catogory)
		{
			$_SESSION['delete_catogory']="<h5 style='color:green;text-align:center'>Sucessfully Deleted one catogory...</h5><br><br>";
			header('location:view_catagory.php');
		}
		else
		{
			$_SESSION['delete_catogory']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_catagory.php');
		}
 // exit();
}

?>