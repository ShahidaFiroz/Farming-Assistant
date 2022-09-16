<?php


require('../Database/user_class.php');
require ('../Database/common_code.php');
session_start();
if(isset($_POST['Complaints']))
{
  echo $com_subject=$_POST['com_subject'];
	$com_message =$_POST['com_message'];
	
	 
 $log_id=$_SESSION['log_id'];
    
   // exit();
        	$user=new user_class();

    	$ccc=$user->add_reg_details($log_id);
       // print_r($bbb);
        $com_regid =$ccc['reg_id'];        
        $result=$user->add_complaint($com_regid, $com_subject,$com_message);
            //print_r($result);
            //exit();
    		if($result)
    		{
    			$_SESSION['add_comp_msg']="<h5 style='color:green;text-align:center'>Sucessfully inserted one complaint. ..</h5><br>";
    			
    		}
    		else
    		{
    			$_SESSION['add_comp_msg']="<br><h5 style='color:red'>Erorr... please try again!</h5><br>";
    			
    		}
    
   header('Location:add_complaint.php');
    	
} 


?>