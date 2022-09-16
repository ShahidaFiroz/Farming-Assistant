<?php
// session_start();
// if(!isset($_SESSION['cat_id']))
// {
// 	header('location:../Login.php');
// }
require('header.php');
// require('../Database/farmer_class.php');

$farmer=new farmer_class();

if (isset($_GET['cat_id']))
{
	$cat_id=$_GET['cat_id'];
	$Catogory=array();
$Catogory=$farmer->get_Catogory_details($cat_id);
 // print_r($Catogory);
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
			<h3 class="agileits_w3layouts_head"><span>Category</span></h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para"></p>
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<?php
				if(isset($_SESSION['add_category_msg']))
				{
					echo $_SESSION['add_category_msg'];
					unset($_SESSION['add_category_msg']);
				}

				
			?>
						<form action="edit_catagory_action.php" method="post">
							<span>
								<i>Category Name</i>
								<input type="text" name="cat_name"  required="" value="<?php echo $Catogory['cat_name'] ?>">
							</span>
							<span>
								<i>Category Description</i>
								<input type="text" name="cat_description"   required="" value="<?php echo $Catogory['cat_description'] ?>">
                 				</span>
													
   								<input type="hidden" value="<?php echo $Catogory['cat_id'] ?>" name="cat_id">
							<div class="w3_submit">
								<input type="submit" value="Update Now" name="edit_catagory">
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
<?php
require 'footer.php';
?>