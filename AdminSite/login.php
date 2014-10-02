<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <!--Head-->
	<?php
		$headtitle = 'Tawkur - Login';
		include '../mainContent/adminhead.php';
	?>
	<!-- CSS Page Style -->    
	 <!-- Login -->
	<link rel="stylesheet" href="../assets/css/pages/page_log_reg_v1.css">
	<link rel="stylesheet" href="../assets/css/pages/page_log_reg_v2.css">  
</head> 

<body>
<!--=== Content Part ===-->    
<div class="container">
	<img src="../assets/img/tawkur Logo_transparent.png" class="img-responsive center-block">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<form action="" id="sky-form1" class="reg-page sky-form">
			<div class="reg-header">            
				<h2>Login to your account</h2>
				<p>Don't Have Account? Click <a class="color-green" href="registration.php"><b>Sign Up</b></a> to registration.</p>
			</div>
			<div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">  <i class="fa fa-times"></i></button>
                <p>The Email address provided is not in our system.  Please try again.</p>
            </div> 
			<section>
				<label class="input">
					<i class="icon-append fa fa-envelope"></i>
					<input type="email" placeholder="Email" name="email">
				</label>
			</section>
			<section>
               <label class="input">
                  <i class="icon-append fa fa-lock"></i>
                  <input type="text" placeholder="Password" name="minVal">
                </label>
            </section>                    
			<div class="row">
				<!-- <div class="col-md-6">
					<label class="checkbox"><input type="checkbox"> Stay signed in</label>                        
				</div> -->
				<div class="col-md-12">
					<button class="btn-u pull-right" type="submit">Login</button>                        
				</div>
			</div>

			<hr>

			<h4>Forget your Password?</h4>
			<p>no worries, <a class="color-green" href="forgotpassword.php"><b>click here</b></a> to reset your password.</p>
		</form>            
	</div>
</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Scripts ===-->
<?php include '../mainContent/adminscripts.php';?>
<!-- Login/Registration -->
<script type="text/javascript">
    $.backstretch([
      "../assets/img/bg/5.jpg",
      "../assets/img/bg/4.jpg",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Masking.initMasking();
        Validation.initValidation();
    });
</script>
<!--=== End Scripts ===-->

</body>
</html> 