<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Summary';
			include '../mainContent/adminhead.php';
		?>
	</head> 
	<body>
		<div class="wrapper">

			<!--=== Header ===-->
			<?php include '../mainContent/adminheader.php';?>
			<!--=== Header ===-->

		   <!--=== BreadCrumb ===-->
		   <?php
				//Change Variables for breadcrumbs here
				$subpage='Summary';
				$mainpage='Account Details';
				include '../breadcrumb/adminbreadcrumb.php';
			?>
			<!--=== BreadCrumb ===-->

			<!--=== Content Part ===-->
			<div class="container content">
				<div class="alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4>Oh snap! You got an error!</h4>
                    <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>
                        <a class="btn-u btn-u-red" href="#">Take this action</a> 
                        <a class="btn-u btn-u-sea" href="#">Or do this</a>
                    </p>
                </div>
                <div class="alert alert-success fade in margin-bottom-40">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <h4>Well done!</h4>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </div> 
				<div class="shadow-wrapper">
					<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
						<p>Tawkur's Account Summary gives you up to the minute information on your child's friend requests, activation requests, and activity history. You can also see an overview of Tawkur's various parental control features to make parenting in the digital age a little easier.</p>
					</div>
				</div>	
				<div class="tab-v1">
					<ul class="nav nav-tabs margin-bottom-20">
						<li class="active"><a data-toggle="tab" href="#child1">Child1</a></li>
						<?php 
							$temp = 3;
							for ($childNumber=2; $childNumber<=$temp; $childNumber++){
								echo'<li><a data-toggle="tab" href="#child'.$childNumber.'">Child '.$childNumber.'</a></li>';
							}
						?>
					 </ul> 
					<div class="tab-content">
						<div id="child1" class="container content row tab-pane fade in active">          
			                <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                	<div class="row">               
			                        <div class="col-md-12">
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Friends</h3></div>
			                                <span class="counter-icon"><i class="fa fa-group rounded"></i></span>
			                                <span class="counter">3254</span>   
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Texts Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-comments rounded"></i></span>
			                                <span class="counter">7068</span> 
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                           		<div class="headline"><h3>Voice Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-microphone rounded"></i></span>
			                                <span class="counter">5389</span>
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Video Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-video-camera rounded"></i></span>
			                                <span class="counter">9172</span>
			                            </div>
			                        </div>
			                    </div>			                     
			                </div>
			                <div class="row">
			                	<div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        	<div class="headline"><h3>Device Location</h3></div>
			                        	<div id="map" class="map"></div>
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        <div class="headline"><h3>Table Name</h3></div>
			                         <!--Table Striped-->
					                <table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>First Name</th>
					                            <th class="hidden-sm">Last Name</th>
					                            <th>Username</th>
					                            <th>Status</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                        <tr>
					                            <td>1</td>
					                            <td>Mark</td>
					                            <td class="hidden-sm">Otto</td>
					                            <td>@mdo</td>
					                            <td><!--<span class="label label-warning">Expiring</span>--> 
					                            	<div class="btn-group">
								                        <button type="button" class="btn btn-u-xs btn-danger">Action</button>
								                        <button type="button" class="btn btn-u-xs btn-danger dropdown-toggle" data-toggle="dropdown">
								                            <i class="fa fa-chevron-down"></i>
								                            <span class="sr-only">Toggle Dropdown</span>                            
								                        </button>
								                        <ul class="dropdown-menu" role="menu">
								                            <li><a href="#">Action</a></li>
								                            <li><a href="#">Another action</a></li>
								                            <li><a href="#">Something else here</a></li>
								                            <li class="divider"></li>
								                            <li><a href="#">Separated link</a></li>
								                        </ul>
								                    </div>
					                            </td>                          
					                        </tr>
					                        <tr>
					                            <td>2</td>
					                            <td>Jacob</td>
					                            <td class="hidden-sm">Thornton</td>
					                            <td>@fat</td>
					                            <td>
					                            	<!-- <span class="label label-success">Success</span> -->
					                            	 <button type="button" class="popovers btn-u btn-brd rounded btn-u-xs btn-u-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
							                            Popover on right
							                        </button> 
					                            </td>                           
					                        </tr>
					                        <tr>
					                            <td>3</td>
					                            <td>Larry</td>
					                            <td class="hidden-sm">the Bird</td>
					                            <td>@twitter</td>
					                            <td>
					                            	<!-- <span class="label label-danger">Error!</span> -->
					                            	<a rel="float-shadow" class="btn-u btn-u-xs btn-u-default float-shadow">Float Shadow</a>
					                            </td>                         
					                        </tr>
					                        <tr>
					                            <td>4</td>
					                            <td>htmlstream</td>
					                            <td class="hidden-sm">Web Design</td>
					                            <td>@htmlstream</td>
					                            <td><span class="label label-info">Pending..</span></td>                            
					                        </tr>
					                    </tbody>
					                </table>
					                <!--End Table Striped-->
			                        </div>
			                    </div>
			                </div>
						</div><!--/end row-->	
						<div id="child2" class="container content row tab-pane fade"> 
							<div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                	<div class="row">               
			                        <div class="col-md-12">
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Friends</h3></div>
			                                <span class="counter-icon"><i class="fa fa-group rounded"></i></span>
			                                <span class="counter">3254</span>   
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Texts Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-comments rounded"></i></span>
			                                <span class="counter">7068</span> 
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                           		<div class="headline"><h3>Voice Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-microphone rounded"></i></span>
			                                <span class="counter">5389</span>
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Video Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-video-camera rounded"></i></span>
			                                <span class="counter">9172</span>
			                            </div>
			                        </div>
			                    </div>			                     
			                </div>		  
			                <div class="row">			                     
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        	<div class="headline"><h3>Device Location</h3></div>
			                        	<div id="map" class="map"></div>
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        <div class="headline"><h3>Table Name</h3></div>
			                         <!--Table Striped-->
					                <table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>First Name</th>
					                            <th class="hidden-sm">Last Name</th>
					                            <th>Username</th>
					                            <th>Status</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                        <tr>
					                            <td>1</td>
					                            <td>Mark</td>
					                            <td class="hidden-sm">Otto</td>
					                            <td>@mdo</td>
					                            <td><span class="label label-warning">Expiring</span></td>                          
					                        </tr>
					                        <tr>
					                            <td>2</td>
					                            <td>Jacob</td>
					                            <td class="hidden-sm">Thornton</td>
					                            <td>@fat</td>
					                            <td><span class="label label-success">Success</span></td>                           
					                        </tr>
					                        <tr>
					                            <td>3</td>
					                            <td>Larry</td>
					                            <td class="hidden-sm">the Bird</td>
					                            <td>@twitter</td>
					                            <td><span class="label label-danger">Error!</span></td>                         
					                        </tr>
					                        <tr>
					                            <td>4</td>
					                            <td>htmlstream</td>
					                            <td class="hidden-sm">Web Design</td>
					                            <td>@htmlstream</td>
					                            <td><span class="label label-info">Pending..</span></td>                            
					                        </tr>
					                    </tbody>
					                </table>
					                <!--End Table Striped-->
			                        </div>
			                    </div>
			                </div>
						</div><!--/end row-->
						<div id="child3" class="container content row tab-pane fade">         	                    
			                <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                	<div class="row">               
			                        <div class="col-md-12">
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Friends</h3></div>
			                                <span class="counter-icon"><i class="fa fa-group rounded"></i></span>
			                                <span class="counter">3254</span>   
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Texts Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-comments rounded"></i></span>
			                                <span class="counter">7068</span> 
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                           		<div class="headline"><h3>Voice Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-microphone rounded"></i></span>
			                                <span class="counter">5389</span>
			                            </div>
			                            <div class="counters col-md-3 col-sm-3">
			                            	<div class="headline"><h3>Video Chats</h3></div>
			                                <span class="counter-icon"><i class="fa fa-video-camera rounded"></i></span>
			                                <span class="counter">9172</span>
			                            </div>
			                        </div>
			                    </div>			                     
			                </div>		  
			                <div class="row">			                     
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        	<div class="headline"><h3>Device Location</h3></div>
			                        	<div id="map" class="map"></div>
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        <div class="headline"><h3>Table Name</h3></div>
			                         <!--Table Striped-->
					                <table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>First Name</th>
					                            <th class="hidden-sm">Last Name</th>
					                            <th>Username</th>
					                            <th>Status</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                        <tr>
					                            <td>1</td>
					                            <td>Mark</td>
					                            <td class="hidden-sm">Otto</td>
					                            <td>@mdo</td>
					                            <td><span class="label label-warning">Expiring</span></td>                          
					                        </tr>
					                        <tr>
					                            <td>2</td>
					                            <td>Jacob</td>
					                            <td class="hidden-sm">Thornton</td>
					                            <td>@fat</td>
					                            <td><span class="label label-success">Success</span></td>                           
					                        </tr>
					                        <tr>
					                            <td>3</td>
					                            <td>Larry</td>
					                            <td class="hidden-sm">the Bird</td>
					                            <td>@twitter</td>
					                            <td><span class="label label-danger">Error!</span></td>                         
					                        </tr>
					                        <tr>
					                            <td>4</td>
					                            <td>htmlstream</td>
					                            <td class="hidden-sm">Web Design</td>
					                            <td>@htmlstream</td>
					                            <td><span class="label label-info">Pending..</span></td>                            
					                        </tr>
					                    </tbody>
					                </table>
					                <!--End Table Striped-->
			                        </div>
			                    </div>
			                </div>
						</div><!--/end row-->
					</div>			            
				</div> <!-- End tab-v1 -->
			</div><!--/container-->    
			<!--=== End Content Part ===-->
			
			<!--=== Footer ===-->
			<?php include '../mainContent/adminfooter.php';?>
			<!--=== Footer ===-->
		</div><!--/wrapper-->
		
		
		<!--=== Scripts ===-->
		<?php include '../mainContent/adminscripts.php';?>
		<script type="text/javascript">
		    jQuery(document).ready(function() {
		    	App.initCounter();
		        ContactPage.initMap();
		    });
		</script>
		<!--=== End Scripts ===-->
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 