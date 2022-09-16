<?php
// session_start();
// if(!isset($_SESSION['cat_id']))
// {
// 	header('location:../Login.php');
// }
require('header.php');
// require('../Database/farmer_class.php');

// $farmer=new farmer_class();

$cat_status=0;

// $obj_qu=new farmer_class();
$list=array();
$list=$obj_qu->list_category();

if (isset($_GET['item_id']))
{
	$item_id=$_GET['item_id'];
	$Products=array();
$Products=$obj_qu->get_product_details($item_id);
 // print_r($Products);
 // exit();
}

?>

	<!-- //navigation -->


	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Login</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Login</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head"><span>Product</span></h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para"></p>
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<?php
				if(isset($_SESSION['add_product_msg']))
				{
					echo $_SESSION['add_product_msg'];
					unset($_SESSION['add_product_msg']);
				}

				
			?>
						<form action="edit_product_action.php" method="post" enctype="multipart/form-data">
							<span>
								<i>Product Name</i>
								<input type="text" name="item_name"  required="" value="<?php echo $Products['item_name'] ?>">
							</span>
							<span>
						
                                     <i> Select Category</i>
                                     <select name="item_catid" required>
                                      <option value="<?php echo $Products['item_catid']?>"><?php echo $Products['cat_name']?></option>
                                      <?php
                                      foreach ($list as $category) {
                                      	?>

                                      	<option value="<?php echo $category['cat_id']?>"><?php echo $category['cat_name']?></option>
                                      	<?php

                                      }
                                      ?>

                                </select>
                            </span>
							<img src="../uploads/Products/<?php echo $Products['item_pic'] ?>" width="20%"><br><br>
            				<button type="button" name="item_pic"  onClick="imgchange()">change image</button><br><br>
            				<input type="hidden" name="image_upload" value="<?php echo $Products['item_pic'] ?>">
							<input type="file"  name="upload_file" id="ch"  style="display:none;margin-top: 2%;"/>
							<span>
								<span>
								<i>Product Code</i>
								<input type="text" name="item_code" placeholder=" " required="" value="<?php echo $Products['item_code'] ?>">
                 				</span>
								<i>Product Price</i>
								<input type="text" name="item_price"   required="" value="<?php echo $Products['item_price'] ?>">
                 				</span>
										
								<span>
								<i>Product Quantity</i>
								<input type="text" name="item_qty"   required="" value="<?php echo $Products['item_qty'] ?>">
                 				</span>			
   								<input type="hidden" value="<?php echo $Products['item_id'] ?>" name="item_id">
							<div class="w3_submit">
								<input type="submit" value="Update Now" name="edit_product">
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
  function imgchange()
  {
    document.getElementById('ch').style.display="block";

  }
</script>


<?php
require 'footer.php';
?>