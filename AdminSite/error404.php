<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
   <!--Head-->
	<?php
		$headtitle = 'Tawkur - Page Not Found!';
		include '../mainContent/adminhead.php';
	?>
	<!-- CSS Page Style -->    
	<link rel="stylesheet" href="../assets/css/pages/page_error4_404.css"> <!-- Error -->
</head> 

<body>

    <!--=== Error V4 ===-->    
    <div class="container content">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v4">
                    <a href="#"><img src="../assets/img/logo.png" alt=""></a>
                    <h1>404</h1>
                    <span class="sorry">Sorry, the page you were looking for could not be found!</span>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <a class="btn-u btn-brd btn-u-light" href="http://www.tawkur.com"> Go Back to Main Page</a>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div><!--/container-->
    <!--End Error Block-->

    <!--=== Sticky Footer ===-->
    <div class="container sticky-footer">
        <p class="copyright-space">
            2014 &copy; Tawkur LLC. ALL Rights Reserved.  
        </p>  
    </div>
    <!--=== End Sticky Footer ===-->

<!--=== Scripts ===-->
<?php include '../mainContent/adminscripts.php';?>
<!-- Error -->
<script type="text/javascript">
    $.backstretch([
      "../assets/img/blur/img2.jpg"
      ])
</script>
<!--=== End Scripts ===-->
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
<![endif]-->

</body>
</html> 