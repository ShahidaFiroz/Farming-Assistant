<?php
require('header.php');
?>

<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Germinate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="Assets/images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
	
<!-- breadcrumbs -->
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
			<h3 class="agileits_w3layouts_head"><span>Registration</span></h3>
			<div class="w3_agile_image">
				<img src="Assets/images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para"></p>
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="reg_action.php" method="post">
							<span>
								<i> Name</i>
								<input type="text" name="name" placeholder="Enter Your  Name" required="required" pattern="[a-zA-Z\s]+">
							</span>
							<span>
								<i> Address</i>
								<textarea name ="address" placeholder="Enter Your Address" required="required" pattern="[a-zA-Z\s]+"></textarea> 
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="Email" placeholder="Email " required="">
							</span>
							<span>
								<i>Phone Number</i>
								<input type="text" name="Phone" placeholder=" phone number" required="">
							</span>
							<span>
								<i>Place</i>
								<input type="text" name="Place" placeholder=" place" required="">
							</span>
							
                              <span>
                              	<i> User Name</i>
                              	<input class="text" type="text" name="username" placeholder="Enter Your Username" required="required">

                              </span>
                              <span>
                              	<i> Password</i>
                                <input class="text" type="text" name="password" placeholder="Enter A Password" required="required" style="-webkit-text-security: disc;">
                              	</span>

                               <span>
						
                                      <i> User Type</i>
                                       <select name="log_type" required class="text" >
                                       <option value="">-SELECT-</option>
      
                                    <option value="farmer">FARMER</option>
                                    <option value="user">USER</option>
                                    </select>
  
                                   </span>

							<div class="w3_submit">
								<input type="submit" value="Submit Now" name="Register">
							</div>
						</form>
					</div>
				</div>
				<!-- <div class="col-md-4 w3_agile_mail_right">
					<div class="w3_agileits_mail_right_grid">
						<h4>About Plantation</h4>
						<p>Donec libero lectus, feugiat vel elit nec, mattis tempor mi ante.</p>
						<h5>Follow Us On</h5>
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
						<div class="w3_agileits_mail_right_grid_pos">
							<img src="images/12.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="w3_agileits_mail_right_grid_main">
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>Mail Us</h3>
								<a href="mailto:info@example.com">info@example.com</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>Address</h3>
								<p>My Company 8907 Ukraine.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>Phone</h3>
								<p>+(0121) 121 121</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<?php
require('footer.php');
?>