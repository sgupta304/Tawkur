<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Activity Manager';
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
				$subpage='Activity Manager';
				$mainpage='Parental Controls';
				include '../breadcrumb/adminbreadcrumb.php';
			?>
			<!--=== BreadCrumb ===-->

			<!--=== Content Part ===-->			  
			<div class="container content">
				<div class="shadow-wrapper">
					<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum. Integer nulla felis, porta suscipit nulla et, dignissim commodo nunc. Morbi a semper nulla.</p>
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
							<div class="row">
								<div class="col-md-12">
									<div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
										<div class="headline">
				                        	<h3>Date</h3>
				                        </div>				                        
										<div class="row">
											<div class="col-md-12">
												<div class="control-group">
													<div class="controls">
														<div class="input-group">
															<input id="start" type="text" class="form-control" name="start" placeholder="From Date..."/>
															<label id="start" class="input-group-addon"><i class="fa fa-calendar"></i></label>
															<span class="input-group-addon">to</span>
															<input id="finish" type="text" class="form-control" name="finish" placeholder="To Date..."/>
															<label id="finish" class="input-group-addon"><i class="fa fa-calendar"></i></label>
														</div>
													</div>
												</div>
											</div>                            
										   <!-- <div class="col-md-1"><button class="btn-u" type="button"><i class="fa fa-search"></i> Search</button></div> -->											
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        <div class="headline">
			                        	<h3>Messages</h3>
			                        	<div class="input-group col-md-3 pull-right">
						                    <input type="text" class="form-control" placeholder="Search...">
						                    <span class="input-group-btn">
						                        <button class="btn-u" type="button"><i class="fa fa-search"></i></button>
						                    </span>
						                </div>	
			                        </div>
			                         <!--Table Striped-->
					                <table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>Type</th>
					                            <th>First Name</th>
					                            <th class="hidden-sm">Last Name</th>
					                            <th>Message</th>
					                            <th>Time</th>
					                            <th>Action</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-right"></i></td>
					                            <td>Mark</td>
					                            <td class="hidden-sm">Otto</td>
					                            <td>@mdo</td>
					                            <td>03/19/2011 06:28 PM</td>
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
					                            <td><i class="fa fa-arrow-circle-left"></i></td>
					                            <td>Jacob</td>
					                            <td class="hidden-sm">Thornton</td>
					                            <td>@fat</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td>
					                            	<!-- <span class="label label-success">Success</span> -->
					                            	 <button type="button" class="popovers btn-u btn-brd rounded btn-u-xs btn-u-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
							                            Popover on right
							                        </button> 
					                            </td>                           
					                        </tr>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-left"></i></td>
					                            <td>Larry</td>
					                            <td class="hidden-sm">the Bird</td>
					                            <td>@twitter</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td>
					                            	<!-- <span class="label label-danger">Error!</span> -->
					                            	<a rel="float-shadow" class="btn-u btn-u-xs btn-u-default float-shadow">Float Shadow</a>
					                            </td>                         
					                        </tr>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-right"></i></td>
					                            <td>htmlstream</td>
					                            <td class="hidden-sm">Web Design</td>
					                            <td>@htmlstream</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td><span class="label label-info">Pending..</span></td>                            
					                        </tr>
					                    </tbody>
					                </table>
					                <!--End Table Striped-->
					                <!--Pegination Centered-->
					                    <div class="text-center">
					                        <ul class="pagination">
					                            <li><a href="#">&laquo;</a></li>
					                            <li><a href="#">1</a></li>
					                            <li><a href="#">2</a></li>
					                            <li class="active"><a href="#">3</a></li>
					                            <li><a href="#">4</a></li>
					                            <li><a href="#">5</a></li>
					                            <li><a href="#">&raquo;</a></li>
					                        </ul>                                                            
					                    </div>
					                <!--End Pegination Centered-->
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
			                     <div class="col-md-12">
			                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1">
			                        <div class="headline">
			                        	<h3>Calls</h3>
			                        	<div class="input-group col-md-3 pull-right">
						                    <input type="text" class="form-control" placeholder="Search...">
						                    <span class="input-group-btn">
						                        <button class="btn-u" type="button"><i class="fa fa-search"></i></button>
						                    </span>
						                </div>	
			                        </div>
			                         <!--Table Striped-->
					                <table class="table table-striped">
					                    <thead>
					                        <tr>
					                            <th>Type</th>
					                            <th>First Name</th>
					                            <th class="hidden-sm">Last Name</th>
					                            <th>Time</th>
					                            <th>Duration</th>
					                            <th>Action</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-right"></i></td>
					                            <td>Mark</td>
					                            <td class="hidden-sm">Otto</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td>00:12:01</td>
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
					                            <td><i class="fa fa-arrow-circle-left"></i></td>
					                            <td>Jacob</td>
					                            <td class="hidden-sm">Thornton</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td>00:12:01</td>
					                            <td>
					                            	<!-- <span class="label label-success">Success</span> -->
					                            	 <button type="button" class="popovers btn-u btn-brd rounded btn-u-xs btn-u-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
							                            Popover on right
							                        </button> 
					                            </td>                           
					                        </tr>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-left"></i></td>
					                            <td>Larry</td>
					                            <td class="hidden-sm">the Bird</td>
					                            <td>03/19/2011 06:28 PM</td>
					                             <td>00:12:01</td>
					                            <td>
					                            	<!-- <span class="label label-danger">Error!</span> -->
					                            	<a rel="float-shadow" class="btn-u btn-u-xs btn-u-default float-shadow">Float Shadow</a>
					                            </td>                         
					                        </tr>
					                        <tr>
					                            <td><i class="fa fa-arrow-circle-right"></i></td>
					                            <td>htmlstream</td>
					                            <td class="hidden-sm">Web Design</td>
					                            <td>03/19/2011 06:28 PM</td>
					                            <td>00:12:01</td>
					                            <td><span class="label label-info">Pending..</span></td>                            
					                        </tr>
					                    </tbody>
					                </table>
					                <!--End Table Striped-->
					                <!--Pegination Centered-->
					                    <div class="text-center">
					                        <ul class="pagination">
					                            <li><a href="#">&laquo;</a></li>
					                            <li><a href="#">1</a></li>
					                            <li><a href="#">2</a></li>
					                            <li class="active"><a href="#">3</a></li>
					                            <li><a href="#">4</a></li>
					                            <li><a href="#">5</a></li>
					                            <li><a href="#">&raquo;</a></li>
					                        </ul>                                                            
					                    </div>
					                <!--End Pegination Centered-->
			                        </div>
			                    </div>
			                </div>
						</div><!--/end row-->
						<div id="child2" class="container content row tab-pane fade">       
			
						</div><!--/end row-->
						<div id="child3" class="container content row tab-pane fade">                          
			
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
		<script>
			$('.cal').supercal({
				transition: 'carousel-vertical'
			});
		</script>
		<script type="text/javascript">
		    jQuery(document).ready(function() {
		        RegForm.initRegForm();
		        CheckoutForm.initCheckoutForm(); 
		        Datepicker.initDatepicker();  
		        Masking.initMasking();
		        Validation.initValidation();    
		    });
		</script>
		<!--=== End Scripts ===-->
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 