<?php
require('database.php');
class Public_class extends database
{
	public function register_user( $name,$address,$email,$Phone,$Place,
        	$username,$password,$log_type)
	{
       // $user_type="user";
        $date=date('y/m/d');
       $status=0;
       // exit();
		$query = "INSERT INTO `fa_login`(`log_username`,`log_password`,`log_type`,`log_cdate`,`log_status`)
                 VALUES ('$username','$password','$log_type','$date','$status')";
     
         $result = mysqli_query($this->con, $query);

         echo $log_id=mysqli_insert_id($this->con);
        

		$query = "INSERT INTO `fa_registration`(`reg_logid`,`reg_name`,`reg_address`,`reg_email`,`reg_phone`,`reg_place`,`reg_cdate`,`reg_status`)
                 VALUES ('$log_id','$name','$address','$email','$Phone','$Place','$date','$status')";
     //    echo $query;
     // exit();
        $result = mysqli_query($this->con, $query);
        
        return $result;
	}
function login_check($log_username,$log_password,$log_type)
  {
    
    $query=mysqli_query($this->con,"select * from fa_login where `log_username`='$log_username' and `log_password`='$log_password' and `log_type`='$log_type'");
    $result=mysqli_fetch_array($query);
    return $result;
  }
	
	
}
?>