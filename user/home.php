<?php
require('header.php');
session_start();
require('../Database/user_class.php');
$log_id=$_SESSION['log_id'];
$user=new user_class();
$list=array();
$list=$user->add_profile_details( $log_id);
 print_r($list);

?>

		<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Welcome to our <span>Plantation</span></h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
		</div>
		<div class="mis-stage w3_agileits_welcome_grids"> 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/2.png" alt=" " class="img-responsive" />
						<figcaption>Strawberry</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/3.png" alt=" " class="img-responsive" />
						<figcaption>Orange</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/4.png" alt=" " class="img-responsive" />
						<figcaption>Pomegranates</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/5.png" alt=" " class="img-responsive" />
						<figcaption>Lemon</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/6.png" alt=" " class="img-responsive" />
						<figcaption>Kiwi Fruits</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/7.png" alt=" " class="img-responsive" />
						<figcaption>Apples</figcaption>
					</figure>
				</li>
			</ol>
		</div>
	</div>


		<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head"> <span>Profile</span></h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
		</div>
		<div class="mis-stage w3_agileits_welcome_grids"> 
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						

						<!-- <?php
				if(isset($_SESSION['update_profile_msg']))
				{
					echo $_SESSION['update_profile_msg'];
					unset($_SESSION['update_profile_msg']);
				}

				
			?> -->
						<form action="profile_edit_action.php" method="post" >
							<span>
								<i> Name</i>
								<input type="text" name="reg_name"  required="required" value="<?php echo $list['reg_name'] ?>" >
							</span>
							<span>
								<i> Address</i>
								<textarea name ="reg_address" required="required" ><?php echo $list['reg_address'] ?> </textarea> 
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="reg_email"  required="" value="<?php echo $list['reg_email'] ?>" >
							</span>
							<span>
								<i>Phone Number</i>
								<input type="text" name="reg_phone" required="" value="<?php echo $list['reg_phone'] ?>">
							</span>
							<span>
								<i>Place</i>
								<input type="text" name="reg_place"  required="" value="<?php echo $list['reg_place'] ?>" >
							</span>
							
                              <span>
                              	<i> User Name</i>
                              	<input class="text" type="text" name="log_username"  required="required" value="<?php echo $list['log_username'] ?>">

                              </span>
                              <span>
                              	<i> Password</i>
                                <input class="text" type="text" name="log_password"  required="required" style="-webkit-text-security: disc;"  value="<?php echo $list['log_password'] ?>">
                              	</span>
                                
                              
							<div class="w3_submit">
								<input type="submit" value="Update" name="editprofile">
							</div>
						</form>
					</div>
				</div>
			<!-- The element to select and apply miSlider to - the class is optional
			<!-- <ol class="mis-slider">
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/2.png" alt=" " class="img-responsive" />
						<figcaption>Strawberry</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/3.png" alt=" " class="img-responsive" />
						<figcaption>Orange</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/4.png" alt=" " class="img-responsive" />
						<figcaption>Pomegranates</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/5.png" alt=" " class="img-responsive" />
						<figcaption>Lemon</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/6.png" alt=" " class="img-responsive" />
						<figcaption>Kiwi Fruits</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="../Assets/images/7.png" alt=" " class="img-responsive" />
						<figcaption>Apples</figcaption>
					</figure>
				</li>
			</ol>
		</div>
	</div> -->


 -->

		<!--<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Latest <span>News</span> from plantation</h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/3.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Design & Planting</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>28 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quality & Reliability</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/5.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Satisfied Customers</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<?php
require('footer.php');
?>



		<!--<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Latest <span>News</span> from plantation</h3>
			<div class="w3_agile_image">
				<img src="../Assets/images/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/3.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Design & Planting</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>28 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quality & Reliability</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="../Assets/images/5.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Satisfied Customers</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<!-- 
<?php
require('footer.php');

?> -->

