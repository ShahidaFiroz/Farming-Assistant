<?php
require('header.php');
// require('../Database/farmer_class.php');
$reg_id=$_SESSION['reg_id'];
// $item_id=$_GET['ins_id'];
  $farmer = new farmer_class();

$Products=array();
$products=$farmer->view_complaint($reg_id);
  
         // print_r($products);
?>

<div class="breadcrumbs">
    <div class="container">
      <div class="w3layouts_breadcrumbs_left">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Farmer</a><span>/</span></li>
          <li><i class="fa fa-info-circle" aria-hidden="true"></i>Complaints</li>
        </ul>
      </div>
      <div class="w3layouts_breadcrumbs_right">
        <h2>View Complaints</h2>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<div class="welcome">
    <div class="container">
 <?php
if (isset($_SESSION["add_com_msg"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["add_com_msg"];
   unset($_SESSION["add_com_msg"]);
   ?>
   </div>

<?php
    }
   ?>
   <?php
if (isset($_SESSION["delete_com"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["delete_com"];
   unset($_SESSION["delete_com"]);
   ?>
   </div>

<?php
    }
   ?>

<div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <!-- <th>Instruction Id</th>
                  <th>Instruction RegId</th> -->
                  <!-- <th>Instruction ItemId</th> -->
                  <th>Complaint Subject</th>
                  <th>Complaint Message</th>
                  <th>Complaint date</th>
                  
                   
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
       <?php
       if($products)
       {
       foreach ($products as $values)
             {
              $pro_id=$values['ins_itemid'];
            $prod=$farmer->get_product_details($pro_id);
            
              ?>
                <tr class="text-left">
                <!-- <td><?php echo $values['ins_itemid'];?></td> -->
                <td><?php echo $prod['item_name'];?></td>
                <td><?php echo $values['ins_growing_period'];?></td>
               <!-- <td  style="width:10%;"><img  src="../uploads/Products/<?php echo $values['item_pic'] ?>" width="60%;"></td> -->
               
                <td><?php echo $values['ins_description'];?></td>
                <td><?php echo $values['ins_fertiliser'];?></td>
                <!-- <input type="hidden" value="<?php echo $item_id; ?>" name="item_id"> -->
                <td>
                   <a href="edit_instruction.php?ins_id=<?php echo $values['ins_id']; ?>"><button type="button" name="edit"  class="btn primary-bg">Edit</button></a> 
                   <a href="delete_instruction.php?ins_id=<?php echo $values['ins_id']; ?>"><button type="button"  name="delete"  class="btn btn-danger">Delete</button></a>
                  </td>
              </tr> 
              <?php
               }
               }
               else 
          {
        ?>
        <tr><td colspan="5">
        <div class="alert alert-warning" role="alert">
          <strong>Warning!</strong> No Notifications to show....
        </div></td>
      </tr>
        <?php
         }  
               ?> 
              </tbody>
            </table>
         </div>
     </div>
 </div>

<?php
require('footer.php');
?>