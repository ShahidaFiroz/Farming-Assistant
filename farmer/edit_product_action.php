<?php

session_start();
require('../Database/farmer_class.php');
require ('../Database/common_code.php');

if(!isset($_SESSION['reg_id']))
{
	header('location:../Login.php');
}
 $farmer=new farmer_class();



     
	if(isset($_POST['edit_product']))
	{
		echo $item_name=$_POST['item_name'];
		$item_catid=$_POST['item_catid'];
		$item_code=$_POST['item_code'];
		$item_price=$_POST['item_price'];
		$item_pic=$_POST['image_upload'];
		
		$item_qty=$_POST['item_qty'];
		 $item_id=$_POST['item_id'];
		$ph=$_FILES['upload_file']['name'];
       $photo=$_FILES['upload_file']['tmp_name'];
     $target_path = "../uploads/Products/";
     $target_path1 = $target_path.basename($_FILES['upload_file']['name']);
      $COMMON=new common_code();
     $image_upload = $COMMON->Singlefile_Upload($target_path,$photo);
     echo $image_upload;
     if(!$image_upload){
     	$image_upload=$item_pic;
     }
       // exit();
if($image_upload)
   {
		$Products=$farmer->Update_products($item_name,$item_catid ,$image_upload,$item_code,$item_price,$item_qty,$item_id);
		 // print_r($login);
		
		if($Products)
		{
			$_SESSION['Update_products']="<h5 style='color:green;text-align:center'>Sucessfully updated one Product...</h5><br><br>";
			header('location:view_product.php');
		}
		else
		{
			$_SESSION['Update_products']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:view_product.php');
		}
	}


	}
?>