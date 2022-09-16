<?php
require('database.php');
class farmer_class extends database
{
	
public function add_reg_details( $log_id)
  {
       
    
    $query=mysqli_query($this->con,"select * from fa_registration where `reg_logid`='$log_id' ");
    $result=mysqli_fetch_array($query);
    return $result;
  
  }
  public function add_category($reg_id, $cat_name,$cat_description)
  {
       
        $date=date('y/m/d');
       $status=0;
       // exit();
     
    
    $query = "INSERT INTO `fa_category`(`cat_regid`,`cat_name`,`cat_description`,`cat_cdate`,`cat_status`)
                 VALUES ('$reg_id','$cat_name','$cat_description','$date','$status')";
     
         $result = mysqli_query($this->con, $query);
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

  public function add_product($item_farmer_id,$item_catid ,$item_code,$item_name,$item_price,$image_upload,$item_qty)
  {
       
        $date=date('y/m/d');
       $status=0;
       // exit();
     
    
    $query = "INSERT INTO `fa_market_farmer`(`item_farmer_id`,`item_catid`,`item_code`,`item_name`,`item_price`,`item_pic`,`item_qty`,`item_cdate`,`item_status`)
                 VALUES ('$item_farmer_id','$item_catid','$item_code','$item_name','$item_price','$image_upload','$item_qty','$date','$status')";
     
         $result = mysqli_query($this->con, $query);
  return $result;
  }
  public  function view_product($reg_id)
  {
    // echo "select * from `fa_market_farmer`  where `item_status`=0 and `reg_id`='$reg_id'";
  $querys= mysqli_query($this->con,"select * from `fa_market_farmer`  where `item_status`=0 and item_farmer_id='$reg_id'");
    $result=array();

    while($row=mysqli_fetch_array($querys))
    {
      $result[]=$row;
    }

    return $result;
  
  }

   public function get_product_details($item_id)
  {

     $query="SELECT * FROM `fa_market_farmer` p inner join fa_category c  on p.item_catid=c.cat_id WHERE `item_id`='$item_id'";
    // exit();
    $result=mysqli_query($this->con, $query);
    $result1=mysqli_fetch_array($result);
    return $result1;
  }
public function Update_products($item_name,$item_catid ,$image_upload,$item_code,$item_price,$item_qty,$item_id)
      {
    $query="UPDATE `fa_market_farmer` SET `item_name`='$item_name',`item_catid`='$item_catid',`item_code`='$item_code',`item_price`='$item_price',`item_pic`='$image_upload',`item_qty`='$item_qty' WHERE `item_id`='$item_id'";
    $result=mysqli_query($this->con, $query);
    return $result;

  }
  public function delete_product($item_id)
  {
    $query="UPDATE `fa_market_farmer` SET `item_status`=1 WHERE `item_id`='$item_id'";
    $result=mysqli_query($this->con, $query);
    return $result;
  }
 public function	add_complaint($com_regid, $com_subject,$com_message)
 {


        $date=date('y/m/d');
       $status=0;
       // exit();
     
    
   $query = "INSERT INTO `fa_complaint`(`com_regid`,`com_subject`,`com_message`,`com_cdate`,`com_status`)
                 VALUES ('$com_regid','$com_subject','$com_message','$date','$status')";
     
         $result = mysqli_query($this->con, $query);
  return $result;
 }
  public function	add_instruction($ins_regid,$item_id,$ins_growing_period,$ins_fertiliser,$ins_description)

 {
       $date=date('y/m/d');
       $status=0;
       // exit();
     
    
   $query = "INSERT INTO `fa_instructions`(`ins_regid`,`ins_itemid`,`ins_growing_period`,`ins_fertiliser`,`ins_description`,`ins_cdate`,`ins_status`)
                 VALUES ('$ins_regid','$item_id','$ins_growing_period','$ins_fertiliser','$ins_description','$date','$status')";
     
         $result = mysqli_query($this->con, $query);
  return $result;
 }
  public function view_instruction($reg_id)
  
 {
     // echo "select * from `fa_instructions`  where `ins_status`=0 and `ins_regid`='$reg_id'";
  $querys= mysqli_query($this->con,"select * from `fa_instructions`  where `ins_status`=0 and ins_regid='$reg_id'");
    $result=array();

    while($row=mysqli_fetch_array($querys))
    {
      $result[]=$row;
    }

    return $result;
  
  }

public function delete_ins($ins_id)

{
   echo $query="UPDATE `fa_instructions` SET `ins_status`=1 WHERE `ins_id`='$ins_id'";
    $result=mysqli_query($this->con, $query);
    return $result;
  }
public  function list_instructions()
  {
    $querys= mysqli_query($this->con,"select * from `fa_instructions` where ins_status=0 ");
    $result=array();

    while($row=mysqli_fetch_array($querys))
    {
      $result[]=$row;
    }

    return $result;
  
  }
 public function get_instruction_details($ins_id)
  {

    $query="SELECT * FROM `fa_instructions` WHERE `ins_id`='$ins_id'";
    $result=mysqli_query($this->con, $query);
    $result1=mysqli_fetch_array($result);
    return $result1;
  }
  public function Update_ins($ins_growing_period,$ins_fertiliser,$ins_description,$ins_id)
  {
    $query="UPDATE `fa_instructions` SET `ins_growing_period`='$ins_growing_period',`ins_fertiliser`='$ins_fertiliser' ,`ins_description`='$ins_description' WHERE `ins_id`='$ins_id'";
    $result=mysqli_query($this->con, $query);
    return $result;

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