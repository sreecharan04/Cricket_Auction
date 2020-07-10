
<?php
session_start();
if(isset($_SESSION['sess_user2']))
{
	
	header("Location: /project/Admin/admin.php"); 
		
}
?>
<?php
if(isset($_GET['message2']))
{
	?>
   <script>
   alert('Invalid Username or Password');
   </script>
    <?php	
		
}
?>

<!DOCTYPE HTML>
<html>
	<head>
			<title>Auction A Real estate category Flat bootstrap Responsive  Website Template | Contact :: w3layouts</title>

			<link href="desgin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="desgin/js/jquery-1.11.0.min.js"></script>

<!-- Custom Theme files -->
			<link href="desgin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->

			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
			</script>

			<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<!--Google Fonts-->
			<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="desgin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="desgin/css/util.css">
	<link rel="stylesheet" type="text/css" href="desgin/css/main.css">
<!--===============================================================================================-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="desgin/js/move-top.js"></script>
<script type="text/javascript" src="desgin/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
</head>
<body>
<!-- //end-smoth-scrolling -->
<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="index.php"> <img src="/desgin/images/logo.png" alt="" title=""> </a>
			</div>
			<div class="head-left">
			  <div class="top-nav">
					<span class="menu"> <img src="/desgin/images/icon.png" alt=""/></span>
				<ul class="res">
					<li><a href="index.php">Home</a></li>
					<li><a href="owner_login.php">Owner Login</a></li>
					<li><a href="admin_login.php">Auctioneer Login</a></li>
					<li><a href="main.php">ALL Login</a></li>
					<li><a href="about.php">About</a></li>
				<div class="clearfix"> </div>
				</ul>
				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			<!-- /script-for-menu -->
			 </div>


		
			<div class="clearfix"> </div>
			   <!-- search-scripts -->
					<script src="desgin/js/classie.js"></script>
					<script src="desgin/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
			  <!-- //search-scripts -->
		</div>

		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="checkboth.php" method="post" >
				<span class="login100-form-title p-b-26">
					Welcome 
				</span>
				<span class="login100-form-title p-b-48">
					<i class="zmdi zmdi-font"></i>
				</span>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="user">
					<span class="focus-input100" data-placeholder="Username"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="pass">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<input name ="login" type="submit"  class="login100-form-btn" value="LOGIN">
							
					</div>
				</div>


<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
				<div class="text-center p-t-115">
					<span class="txt1">
						Don’t have an account?
					</span>

					<a class="txt2" href="register_owner.php">
						Sign Up
					</a>
				</div>
			</form>


		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script src="desgin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="desgin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="desgin/vendor/bootstrap/js/popper.js"></script>
<script src="desgin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="desgin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="desgin/vendor/daterangepicker/moment.min.js"></script>
<script src="desgin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="desgin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="desgin/js/main.js"></script>


</body>
</html>
