<!DOCTYPE html>
	<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
	<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
	<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
	<head>
		<!--Head-->
		<?php
			$headtitle = 'Tawkur - Safe Social for Kids';
			include '../mainContent/head.php';
		?>
	</head> 
	<body>
		<div class="wrapper">

			<!--=== Header ===-->
			<?php include '../mainContent/header.php';?>
			<!--=== Header ===-->

		   <!--=== BreadCrumb ===-->
		   <?php
				//Change Variables for breadcrumbs here
				$left='Tawkur Home';
				$right='Home';
				include '../breadcrumb/breadcrumb.php';
			?>
			<!--=== BreadCrumb ===-->

			<!--=== Content Part ===-->
			<div class="container content">		
			</div>	
			<!--=== End Content Part ===-->
			
			<!--=== Footer ===-->
			<?php include '../mainContent/footer.php';?>
			<!--=== Footer ===-->
		</div><!--/wrapper-->

		<!-- JS Global Compulsory -->           
		<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
		<!-- JS Implementing Plugins -->           
		<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
		<!-- JS Page Level -->           
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
			});
		</script>
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
		<![endif]-->
	</body>
</html> 