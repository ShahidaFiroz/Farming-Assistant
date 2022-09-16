<?php


require('../Database/farmer_class.php');
session_start();
if(isset($_POST['Instructions']))
{
     $ins_growing_period=$_POST['ins_growing_period'];
  $ins_fertiliser=$_POST['ins_fertiliser'];
  $ins_description=$_POST['ins_description'];

   $item_id=$_POST['item_id'];
   
   $ins_regid=$_SESSION['reg_id'];
    // $ins_Itemname=$_SESSION['item_name'];
   
    
   // exit();
          $farmer=new farmer_class();

      // $new=$farmer->add_reg_details($log_id);
      //   // print_r($new);
        // $reg_id=$new['reg_id'];        
        $result=$farmer->add_instruction($ins_regid,$item_id,$ins_growing_period,$ins_fertiliser,$ins_description);
           // print_r($result);
           // exit();
        if($result)
        {
          $_SESSION['add_ins_msg']="<h5 style='color:green;text-align:center'>Sucessfully inserted one Instruction. ..</h5><br>";
          
        }
        else
        {
          $_SESSION['add_ins_msg']="<br><h5 style='color:red'>Erorr... please try again!</h5><br>";
          
        }
    
   header('Location:add_instruction.php');
      
} 


?>