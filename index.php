<?php
if(isset($_GET['message']))
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
<title>Auction management cricket</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
				<a href="index.php"> <img src="images/logo.png" alt="" title=""> </a>
			</div>
			<div class="head-left">
			  <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="owner_login.php">Owner Login</a></li>
					<li><a href="admin_login.php">Auctioneer Login</a></li>
					<li><a href="main.php">ALL Login</a></li>
					<li><a href="about.php">about</a></li>
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
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
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
<!--banner strip start here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
        nav:true,
      });
    });
  </script>

<div class="banner">
	<div class="container">
		<div class="banner-main">
			<ul class="rslides" id="slider">
	        <li>
	  			<h3>Auction for your team</h3>
				<p>Bid for the players present in the auction</p>
				
	        </li>
	       <li>
	  			<h3>Follow the rules</h3>
				<p>Know your restrictions before bidding for a player</p>
				<div class="bann-btn">
					  <a href="about.php" class="hvr-shutter-out-horizontal">Rules</a>
               </div>
	        </li>
	       
	      </ul>
		</div>
	</div>
</div>
<!--banner strip end here-->


</body>
</html>
