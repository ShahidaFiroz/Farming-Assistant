<?php
session_start();

require('Database/Public_class.php');


if(isset($_POST['login']))
{
    $log_username=$_POST['log_username'];
	$log_password=$_POST['log_password'];
	$log_type=$_POST['log_type'];
    
	 $obj=new Public_class();
   $login=$obj->login_check( $log_username,$log_password,$log_type);
        	// print_r($login);
       echo $_SESSION['log_id']=$login['log_id'];
       // exit();
       if($login['log_type']=="admin")
       {
        header('location:admin/home.php');
       
       }
    		elseif($login['log_type']=="farmer")
    		{
    			 header('location:farmer/home.php');
    			
    		}
    		elseif($login['log_type']=="user")
    		{
    		 header('location:user/home.php');
    		}
    else
{
	$_SESSION['login_error']="<br><h5 style='color:red'>Invalid User Name or Password.Plese try again!</h5><br>";
	header('Location:login.php');
}
// header('Location:registration.php');
}
?>