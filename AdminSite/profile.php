<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Profile';
			include '../mainContent/adminhead.php';
		?>		
	    <!-- CSS Page Style -->
	    <link rel="stylesheet" href="../assets/css/pages/profile.css">
	</head> 
	<body>
		<div class="wrapper">

			<!--=== Header ===-->
			<?php include '../mainContent/adminheader.php';?>
			<!--=== Header ===-->

		   <!--=== BreadCrumb ===-->
		   <?php
				//Change Variables for breadcrumbs here
				$subpage='Profile';
				$mainpage='Account Details';
				include '../breadcrumb/adminbreadcrumb.php';
			?>
			<!--=== BreadCrumb ===-->

			<!--=== Content Part ===-->			
			<!--=== Profile ===-->
		    <div class="profile">   
		        <div class="container content">
		        	<div class="shadow-wrapper">
						<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum. Integer nulla felis, porta suscipit nulla et, dignissim commodo nunc. Morbi a semper nulla.</p>
						</div>
					</div>
		            <div class="tab-v1">
		           		<ul class="nav nav-tabs margin-bottom-20">
                            <li class="active"><a data-toggle="tab" href="#parent">Parent</a></li>
                            <?php 
                            	$temp = 3;
                            	for ($childNumber=1; $childNumber<=$temp; $childNumber++){
                            		echo'<li><a data-toggle="tab" href="#child'.$childNumber.'">Child '.$childNumber.'</a></li>';
                            	}
                            ?>
                         </ul> 
		            	<div class="tab-content">
							<div id="parent" class="row tab-pane fade in active">
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
	                                <li class="active"><a data-toggle="tab" href="#profile">Edit Profile</a></li>
	                                <li><a data-toggle="tab" href="#password">Change Password</a></li>
	                                <li><a data-toggle="tab" href="#settings">Notification Settings</a></li>
	                            </ul>          
	                            <div class="tab-content">
	                                <div id="profile" class="profile-edit tab-pane fade in active">
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
	                                        <dt><strong>Email Adress </strong></dt>
	                                        <dd>
	                                            roostere@gmail.com
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>Mobile Phone Number </strong></dt>
	                                        <dd>
	                                            (224)-555-5555 
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>Address 1 </strong></dt>
	                                        <dd>
	                                            45 first Rd 
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>Address 2 </strong></dt>
	                                        <dd>
	                                            Apt 2f
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>City </strong></dt>
	                                        <dd>
	                                            Hershey 
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>State </strong></dt>
	                                        <dd>
	                                            Pennsylvania 
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>Postal Code </strong></dt>
	                                        <dd>
	                                            12345 
	                                            <span>
	                                                <a class="pull-right" href="#">
	                                                    <i class="fa fa-pencil"></i>
	                                                </a>
	                                            </span>
	                                        </dd>
	                                        <hr>
	                                        <dt><strong>Country </strong></dt>
	                                        <dd>
	                                            United States 
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
	
	                                <div id="password" class="profile-edit tab-pane fade">
	                                    <h2 class="heading-md">Manage your Security Settings</h2>
	                                    <p>Change your password.</p>
	                                    </br>
	                                    <form class="sky-form" id="sky-form4" action="">
	                                        <dl class="dl-horizontal">	                                            
	                                            <dt>Current Password</dt>
	                                            <dd>
	                                                <section>
	                                                    <label class="input">
	                                                        <i class="icon-append fa fa-envelope"></i>
	                                                        <input type="email" placeholder="Current Password" name="password">
	                                                        <b class="tooltip tooltip-bottom-right">Your current Password</b>
	                                                    </label>
	                                                </section>
	                                            </dd>
	                                            <dt>New Password</dt>
	                                            <dd>
	                                                <section>
	                                                    <label class="input">
	                                                        <i class="icon-append fa fa-lock"></i>
	                                                        <input type="password" id="password" placeholder="New Password" name="password">
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
	
	                                <div id="settings" class="profile-edit tab-pane fade">
	                                    <h2 class="heading-md">Manage your Notifications.</h2>
	                                    <p>Below are the notifications you may manage.</p>
	                                    </br>
	                                    <form class="sky-form" id="sky-form" action="">
	                                        <label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i></i>Email notification</label>
	                                        <hr>
	                                        <label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i></i>Text/SMS Notification (Carrier charges may apply)</label>
	                                        <hr>	                                           
	                                        <button type="button" class="btn-u btn-u-default">Reset</button>
	                                        <button class="btn-u" type="submit">Save Changes</button>
	                                    </form>    
	                                </div>
	                            </div>
				                        </div>    
				                    </div>
				                    <!--End Profile Body-->
				                </div>
				            </div><!--/end row-->							
				            <?php 
				            for ($childNumber=1; $childNumber<=$temp; $childNumber++){	
				            	include 'profile_child.php';
	                          }
				            ?>
		            	</div>			            
		            </div> <!-- End tab-v1 -->
		        </div><!--/container-->    
		    </div>      
		    <!--=== End Profile ===-->	
			<!--=== End Content Part ===-->
			
			<!--=== Footer ===-->
			<?php include '../mainContent/adminfooter.php';?>
			<!--=== Footer ===-->
		</div><!--/wrapper-->

		<!--=== Scripts ===-->
		<?php include '../mainContent/adminscripts.php';?>
		<script type="text/javascript">
		    jQuery(document).ready(function() {
		        App.init();
		        RegForm.initRegForm();
		        Datepicker.initDatepicker();
		        CheckoutForm.initCheckoutForm();        
		    });
		</script>
		<script>
		    jQuery(document).ready(function ($) {
		        "use strict";
		        $('.contentHolder').perfectScrollbar();
		    });
		</script>
		<!--=== End Scripts ===-->
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 