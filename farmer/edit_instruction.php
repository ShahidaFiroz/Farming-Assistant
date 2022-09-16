<?php
// session_start();
// if(!isset($_SESSION['cat_id']))
// {
// 	header('location:../Login.php');
// }
require('header.php');
// require('../Database/farmer_class.php');

// $farmer=new farmer_class();

$ins_status=0;

// $obj_qu=new farmer_class();
$list=array();
$list=$obj_qu->list_instructions();

if (isset($_GET['ins_id']))
{
	$ins_id=$_GET['ins_id'];
	$Products=array();
$Products=$obj_qu->get_instruction_details($ins_id);
  print_r($Products);
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
			<h3 class="agileits_w3layouts_head"><span>Instructions</span></h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para"></p>
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<?php
				if(isset($_SESSION['add_ins_msg']))
				{
					echo $_SESSION['add_ins_msg'];
					unset($_SESSION['add_ins_msg']);
				}

				
			?>
						<form action="edit_instruction_action.php" method="post" >
							<span>
								<i>Product Growing Period</i>
								<input type="text" name="ins_growing_period"   value="<?php echo $Products['ins_growing_period']?>"?>
							</span>
							<span>
								<i>Fertiliser</i>
								<input type="text" name="ins_fertiliser" value = "<?php echo $Products['ins_fertiliser']?>"?>
                 				</span>
                 				<span>
								<i>Description</i>
								<textarea name ="ins_description"> <?php echo $Products['ins_description']?> </textarea>
                 				</span>
						

                              
   								<input type="hidden" value="<?php echo $Products['ins_id'] ?>" name="ins_id">
							<div class="w3_submit">
								<input type="submit" value="Update Now" name="edit_instruction">
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