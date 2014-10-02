<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Friend Manager';
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
				$subpage='Friend Manager';
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
				                        	<h3>Pending Friend Requests</h3>
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
			                        	<h3>Friends</h3>
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
						</div><!--/end child1 row-->
						<div id="child2" class="container content row tab-pane fade">       
			
						</div><!--/end child2 row-->
						<div id="child3" class="container content row tab-pane fade">                          
			
						</div><!--/end child3 row-->
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
		<!--=== End Scripts ===-->
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 