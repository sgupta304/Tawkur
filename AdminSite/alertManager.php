<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Alert Manager';
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
				$subpage='Alert Manager';
				$mainpage='Parenal Controls';
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
				                        	<h3>Alerts</h3>
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
						                            <td>
						                            	<button class="btn-u btn-u-xs" data-toggle="modal" data-target=".bs-example-modal-sm">Create Alert</button>
								                      	 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
								                            <div class="modal-dialog modal-sm">
								                                <div class="modal-content">
								                                    <div class="modal-header">
								                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button>
								                                        <h4 id="myLargeModalLabel" class="modal-title">Create Alert</h4>
								                                    </div>
								                                    <div class="modal-body">
								                                         <form action="" id="sky-form4" class="sky-form">			                            
												                            <fieldset>					                                
												                                <section>
												                                    <label class="select">
												                                        <select name="Alert">
												                                            <option value="0" selected disabled>Alert...</option>
												                                            <option value="1">Inappropriate Word</option>
												                                            <option value="2">Alert 2</option>
												                                            <option value="3">Alert 3</option>
												                                        </select>
												                                        <i></i>
												                                    </label>
												                                </section>
												                                 <section>
												                                    <label class="select">
												                                        <select name="Frequency">
												                                            <option value="0" selected disabled>Frequency...</option>
												                                            <option value="1">Immediately</option>
												                                            <option value="2">Daily</option>
												                                            <option value="3">Weekly</option>
												                                        </select>
												                                        <i></i>
												                                    </label>
												                                </section>
												                                 <section>
												                                    <label class="select">
												                                        <select name="Alert Type">
												                                            <option value="0" selected disabled>Alert Type...</option>
												                                            <option value="1">Email</option>
												                                            <option value="2">SMS</option>
												                                            <option value="3">Email/SMS</option>
												                                        </select>
												                                        <i></i>
												                                    </label>
												                                </section>
												                            </fieldset>
												                        </form>         
								                                    </div>
								                                    <div class="modal-footer">
								                                        <button data-dismiss="modal" class="btn-u btn-u-default" type="button">Close</button>
								                                        <button class="btn-u" type="button">Save changes</button>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
						                            </td>                            
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
		<!--=== End Scripts ===-->
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 