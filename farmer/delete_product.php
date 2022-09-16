<?php
// session_start();
require('header.php');
// require('../Database/farmer_class.php');

$farmer=new farmer_class();

if (isset($_GET['item_id']))
{
	$item_id=$_GET['item_id'];
	$catogory=array();
  $catogory=$farmer->delete_product($item_id);
 // print_r($Catogory);

 if($catogory)
		{
			$_SESSION['delete_product']="<h5 style='color:green;text-align:center'>Sucessfully Deleted one product...</h5><br><br>";
			header('location:view_product.php');
		}
		else
		{
			$_SESSION['delete_product']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_product.php');
		}
 // exit();
}

?>