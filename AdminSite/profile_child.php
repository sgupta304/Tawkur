<?php
	echo '<div id="child'.$childNumber.'" class="row tab-pane fade">
		<!--Left Sidebar-->
		<div class="col-md-3 md-margin-bottom-40">
			<img class="img-responsive profile-img margin-bottom-20" src="../assets/img/team/5.jpg" alt="">
			<hr> 
			 <!--Datepicker-->
			<form action="" id="sky-form2" class="sky-form">
				<div id="inline-start"></div>
			</form> 
			<!--End Datepicker-->
		</div>
		<!--End Left Sidebar-->                            

		<div class="col-md-9">
			<!--Profile Body-->
			<div class="profile-body margin-bottom-20">
				<div class="tab-v1">
					<ul class="nav nav-justified nav-tabs">
						<li class="active"><a data-toggle="tab" href="#profileChild'.$childNumber.'">Edit Profile</a></li>
						<li><a data-toggle="tab" href="#passwordChild'.$childNumber.'">Change Password</a></li>
					</ul>          
					<div class="tab-content">
						<div id="profileChild'.$childNumber.'" class="profile-edit tab-pane fade in active">
							<h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
							<p>Below are the name and email addresses on file for your account.</p>
							</br>
							<dl class="dl-horizontal">
								<dt><strong>First name </strong></dt>
								<dd>
									Edward 
									<span>
										<a class="pull-right" href="#">
											<i class="fa fa-pencil"></i>
										</a>
									</span>
								</dd>
								<hr>
								<dt><strong>Last Name </strong></dt>
								<dd>
									Rooster 
									<span>
										<a class="pull-right" href="#">
											<i class="fa fa-pencil"></i>
										</a>
									</span>
								</dd>
								<hr>
								<dt><strong>User Name </strong></dt>
								<dd>
									roostered23 
									<span>
										<a class="pull-right" href="#">
											<i class="fa fa-pencil"></i>
										</a>
									</span>
								</dd>
								<hr>								
							</dl>
							<button type="button" class="btn-u btn-u-default">Cancel</button>
							<button type="button" class="btn-u">Save Changes</button>
						</div>

						<div id="passwordChild'.$childNumber.'" class="profile-edit tab-pane fade">
							<h2 class="heading-md">Manage your Security Settings</h2>
							<p>Change your password.</p>
							</br>
							<form class="sky-form" id="sky-form4" action="">
								<dl class="dl-horizontal">
									<dt>Current Password</dt>
									<dd>
										<section>
											<label class="input">
												<i class="icon-append fa fa-user"></i>
												<input type="text" placeholder="Current Password" name="password">
												<b class="tooltip tooltip-bottom-right">Your Current Password</b>
											</label>
										</section>
									</dd>									
									<dt>New password</dt>
									<dd>
										<section>
											<label class="input">
												<i class="icon-append fa fa-lock"></i>
												<input type="password" id="password" placeholder="Password" name="password">
												<b class="tooltip tooltip-bottom-right">Please Enter a New Password</b>
											</label>
										</section>
									</dd>
									<dt>Confirm Password</dt>
									<dd>
										<section>
											<label class="input">
												<i class="icon-append fa fa-lock"></i>
												<input type="password" placeholder="Confirm password" name="passwordConfirm">
												<b class="tooltip tooltip-bottom-right">Please Confirm the Password</b>
											</label>
										</section>
									</dd>    
								</dl>
								<button type="button" class="btn-u btn-u-default">Cancel</button>
								<button class="btn-u" type="submit">Save Changes</button>
							</form>    
						</div>
					</div>
				</div>    
			</div>
			<!--End Profile Body-->
		</div>
	</div><!--/end row-->';
?>