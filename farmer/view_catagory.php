<?php
require('header.php');
// require('../Database/farmer_class.php');


    $reg_id=$_SESSION['reg_id'];
	$farmer = new farmer_class();
	$new =$farmer->view_category($reg_id);
         // print_r($new);
?>

<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Farmer</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Category</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>View Category</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="welcome">
		<div class="container">
 <?php
if (isset($_SESSION["Update_catogory"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["Update_catogory"];
   unset($_SESSION["Update_catogory"]);
   ?>
   </div>

<?php
    }
   ?>
   <?php
if (isset($_SESSION["delete_catogory"])) 
   {
?>
<div class="alert alert-success" role="alert">
          <strong>Well done!</strong>
    <?php
   echo $_SESSION["delete_catogory"];
   unset($_SESSION["delete_catogory"]);
   ?>
   </div>

<?php
    }
   ?>

<div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Category Name</th>
                  <th>Category Description</th>
                  <th>date</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
       <?php
       if($new)
       {
       foreach ($new as $values)
             {
              
              ?>
                <tr class="text-left">
                <td><?php echo $values['cat_name'];?></td>
                <td><?php echo $values['cat_description'];?></td>
                <td><?php echo $values['cat_cdate'];?></td>
                <td>
                   <a href="edit_catagory.php?cat_id=<?php echo $values['cat_id']; ?>"><button type="button" name="edit"  class="btn primary-bg">Edit</button></a> 
                   <a href="delete_catagory.php?cat_id=<?php echo $values['cat_id']; ?>"><button type="button"  name="delete"  class="btn btn-danger">Delete</button></a></td>
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