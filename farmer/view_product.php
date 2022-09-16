<?php
require('header.php');
// require('../Database/farmer_class.php');
$reg_id=$_SESSION['reg_id'];
  $farmer = new farmer_class();

$Products=array();
$products=$farmer->view_product($reg_id);
	
         // print_r($products);
?>

<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Farmer</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Products</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>View Products</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="welcome">
		<div class="container">
 <?php
if (isset($_SESSION["Update_products"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["Update_products"];
   unset($_SESSION["Update_products"]);
   ?>
   </div>

<?php
    }
   ?>
   <?php
if (isset($_SESSION["delete_product"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["delete_product"];
   unset($_SESSION["delete_product"]);
   ?>
   </div>

<?php
    }
   ?>

<div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product  Name</th>
                  <th>product Category</th>
                  <th>Product Price</th>
                  <th>Product Image</th>
                  <th>Product Quantity</th>
                  <th>date</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
       <?php
       if($products)
       {
       foreach ($products as $values)
             {
              $cat_id=$values['item_catid'];
            $catagory=$farmer->get_Catogory_details($cat_id);
            
              ?>
                <tr class="text-left">
                <td><?php echo $values['item_name'];?></td>
                <td><?php echo $catagory['cat_name'];?></td>
                <td><?php echo $values['item_price'];?></td>
               <td  style="width:10%;"><img  src="../uploads/Products/<?php echo $values['item_pic'] ?>" width="60%;"></td>
                <td><?php echo $values['item_qty'];?></td>
                <td><?php echo $values['item_cdate'];?></td>
               

                <td>
                   <a href="edit_product.php?item_id=<?php echo $values['item_id']; ?>"><button type="button" name="edit"  class="btn primary-bg">Edit</button></a> 
                   <a href="delete_product.php?item_id=<?php echo $values['item_id']; ?>"><button type="button"  name="delete"  class="btn btn-danger">Delete</button></a>
                   <a href="add_instruction.php?item_id=<?php echo $values['item_id']; ?>"><button type="button"  name="Instruction"  class="btn btn-danger">Add Instruction</button></a></td>
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