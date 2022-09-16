<?php

session_start();

require('../Database/farmer_class.php');

require ('../Database/common_code.php');

$farmer=new farmer_class();

if(isset($_POST['Products']))
{
     
      $log_id=$_SESSION['log_id'];


     $item_catid=$_POST['item_catid'];
     $item_code=$_POST['item_code'];
	$item_name=$_POST['item_name'];
    $item_price=$_POST['item_price'];
   
    $item_qty=$_POST['item_qty'];
    
    $ph=$_FILES['upload_file']['name'];
     $photo=$_FILES['upload_file']['tmp_name'];
     $target_path = "../uploads/Products/";
     $target_path1 = $target_path.basename($_FILES['upload_file']['name']);
      $COMMON=new common_code();
     $image_upload = $COMMON->Singlefile_Upload($target_path,$photo);
     echo $image_upload;
       // exit();
     if($image_upload)
   {
	
	 
 
    
   // exit();
        	

    	$reg_detail=$farmer->add_reg_details($log_id);
        // print_r($reg_detail);
        // exit();
        $item_farmer_id=$reg_detail['reg_id'];        
        $result=$farmer->add_product($item_farmer_id,$item_catid ,$item_code,$item_name,$item_price,$image_upload,$item_qty);
           // print_r($result);
           // exit();

    		if($result)
    		{
    			$_SESSION['add_product_msg']="<h5 style='color:green;text-align:center'>Sucessfully added one Product. ..</h5><br>";
    			
    		}
    		else
    		{
    			$_SESSION['add_product_msg']="<br><h5 style='color:red'>Erorr... please try again!</h5><br>";
    			
    		}
             // header('Location:add_product.php');
        }
    
  //header('Location:add_product.php');
    	
} 


?>