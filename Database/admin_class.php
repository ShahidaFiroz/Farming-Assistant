<?php
require('database.php');
class admin_class extends database
{
	
public function add_reg_details( $log_id)
  {
       
    
    $query=mysqli_query($this->con,"select * from fa_registration where `reg_logid`='$log_id' ");
    $result=mysqli_fetch_array($query);
    return $result;
  
  }
 public  function list_category()
  {
    $querys= mysqli_query($this->con,"select * from `fa_category` where cat_status=0 ");
    $result=array();

    while($row=mysqli_fetch_array($querys))
    {
      $result[]=$row;
    }

    return $result;
  
  }
 public  function view_category($reg_id)
  {
    $querys= mysqli_query($this->con,"select * from `fa_category`  where cat_status=0 and cat_regid='$reg_id'");
    $result=array();

    while($row=mysqli_fetch_array($querys))
    {
      $result[]=$row;
    }
 return $result;
  
  }
  public function get_Catogory_details($cat_id)
  {

    $query="SELECT * FROM `fa_category` WHERE `cat_id`='$cat_id'";
    $result=mysqli_query($this->con, $query);
    $result1=mysqli_fetch_array($result);
    return $result1;
  }
  public function Update_catogory($cat_name,$cat_description,$cat_id)
  {
    $query="UPDATE `fa_category` SET `cat_name`='$cat_name',`cat_description`='$cat_description' WHERE `cat_id`='$cat_id'";
    $result=mysqli_query($this->con, $query);
    return $result;

  }
public function delete_catagory($cat_id)
  {
    $query="UPDATE `fa_category` SET `cat_status`=1 WHERE `cat_id`='$cat_id'";
    $result=mysqli_query($this->con, $query);
    return $result;
  }
  public function govt_policy( $pol_name,$pol_description,$pol_file,$pol_cdate ,$pol_status)
	{
       
        $date=date('y/m/d');
       $status=0;
       // exit();
		$query = "INSERT INTO `fa_policies`(`pol_name`,`pol_description`,`pol_file`,`pol_cdate`,`pol_status`)
                 VALUES ('$pol_name','$pol_description','$pol_file','$date','$status')";
     
         $result = mysqli_query($this->con, $query);

        
     // exit();
        $result = mysqli_query($this->con, $query);
        
        return $result;
	}
function add_instruction($log_username,$log_password,$log_type)
  {
    
    $query = "INSERT INTO `fa_instructions`(`ins_itemid`,`ins_growing_period`,`ins_fertiliser`,`ins_description`,`pol_status`)
                 VALUES ('$ins_itemid','$ins_growing_period','$ins_fertiliser','$ins_description','$pol_status')";
     
         $result = mysqli_query($this->con, $query);

         echo $log_id=mysqli_insert_id($this->con);
        
  }
	 public function add_profile_details( $log_id)
{

    // $log_id=$_SESSION['log_id'];
    $query=" SELECT * FROM `fa_registration` as p inner join `fa_login` as c   on p.reg_logid=c.log_id WHERE `log_id`='$log_id'";
    // exit();
    // var_dump($query);
    $result=mysqli_query($this->con, $query);

    $result1=mysqli_fetch_array($result);

    return $result1;
  }

  public function profile_edit( $reg_name,$reg_address,$reg_email,$reg_phone
,$reg_place,$log_username,$log_password,$log_id)
  {
     $query="UPDATE `fa_login` SET `log_username`='$log_username' ,`log_password`='$log_password' WHERE `log_id`='$log_id'";
    $result=mysqli_query($this->con, $query);
    
 
      $query="UPDATE `fa_registration` SET `reg_name`='$reg_name' ,`reg_address`='$reg_address',`reg_email`='$reg_email' ,`reg_phone`='$reg_phone',`reg_place`='$reg_place' WHERE `reg_logid`='$log_id'<br>";
    $result=mysqli_query($this->con, $query);
    return $result;
     
  }





	
}
?>