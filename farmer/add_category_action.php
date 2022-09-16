<?php


// require('../Database/farmer_class.php');
session_start();
if(isset($_POST['category']))
{
     $cat_name=$_POST['cat_name'];
	$cat_description=$_POST['cat_description'];
	
	 
 $log_id=$_SESSION['log_id'];
    
   // exit();
        	$farmer=new farmer_class();

    	$new=$farmer->add_reg_details($log_id);
        // print_r($new);
        $reg_id=$new['reg_id'];        
        $result=$farmer->add_category($reg_id, $cat_name,$cat_description);
           // print_r($result);
           // exit();
    		if($result)
    		{
    			$_SESSION['add_category_msg']="<h5 style='color:green;text-align:center'>Sucessfully inserted one Category. ..</h5><br>";
    			
    		}
    		else
    		{
    			$_SESSION['add_category_msg']="<br><h5 style='color:red'>Erorr... please try again!</h5><br>";
    			
    		}
    
   header('Location:add_category.php');
    	
} 


?>