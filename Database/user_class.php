<?php
require('database.php');
class user_class extends database
{
	
	 public function add_complaint($com_regid, $com_subject,$com_message)
 {


        $date=date('y/m/d');
       $status=0;
       // exit();
     
    
  $query = "INSERT INTO `fa_complaint`(`com_regid`,`com_subject`,`com_message`,`com_cdate`,`com_status`)
                 VALUES ('$com_regid','$com_subject','$com_message','$date','$status')";
     
         $result = mysqli_query($this->con, $query);
  return $result;
 }
public function add_reg_details( $log_id)
  {
       
    
    $query=mysqli_query($this->con,"select * from fa_registration where `reg_logid`='$log_id' ");
    $result=mysqli_fetch_array($query);
    return $result;
  
  }
	
}
?>