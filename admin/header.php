
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php 
session_start();
require('../Database/admin_class.php');
$log_id=$_SESSION['log_id'];
$obj_qu=new admin_class();
$list=array();
$list=$obj_qu->add_profile_details( $log_id);
$_SESSION['reg_id']=$list['reg_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Germinate an Agriculture Category Flat Bootstrap Responsive Website Template | About Us :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="../Assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../Assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="../Assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="../Assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<h1><a href="index.php"><span>G</span>erminate<i>Grow healthy products</i></a></h1>
				</div>
				<div class="agile_social_icons_banner">
					<li><a href="index.php">Home</a></li>
									
									<li><a href="add_category.php">Category</a></li> 
									<li class="active"><a href="add_product.php">Product</a></li> 
									<li class="active"><a href="view_catagory.php">View Catagory</a></li>
									<li><a href="services.php">Instructions</a></li>
									<li><a href="gallery.php">Complaint</a></li> 
                                   <li><a href="gallery.php">Policy</a></li> 
                                    
					</ul>
				</div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<!-- <div class="shy-menu-panel">s
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li><a href="index.php">Home</a></li>
									<li class="active"><a href="about.php">View</a></li> 
									<li><a href="add_instruction.php">Instructions</a></li>
									<li><a href="add_govt_policy.php">Policy</a></li> 
									<li><a href="logout.php">LogOut</a></li>
									
								</ul>
							</nav>
						</div> -->
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- banner 