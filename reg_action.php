<?php
session_start();

require('Database/Public_class.php');


if(isset($_POST['Register']))
{
    $name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Place=$_POST['Place'];
	$username=$_POST['username'];
	$password=$_POST['password'];
    $log_type=$_POST['log_type'];
	 
   
        	$public_obj=new Public_class();
    	
        $insert=$public_obj->register_user( $name,$address,$email,$Phone,$Place,
        	$username,$password,$log_type);
    		if($insert)
    		{
    			$_SESSION['register_employee']="<h5 style='color:green;text-align:center'>You Are Registered Sucessfully. ..</h5><br>";
    			
    		}
    		else
    		{
    			$_SESSION['register_employee']="<br><h5 style='color:red'>Erorr... plese try again!</h5><br>";
    			
    		}
    
    header('Location:registration.php');
    	
} 
else
{
	$_SESSION['upload_img']="<br><h5 style='color:red'>Error in Uploading image.Plese try again!</h5><br>";
	header('Location:registration.php');
}
header('Location:registration.php');

?>