

<!DOCTYPE HTML>
<html>
<head>
<title>Auction A Real estate category Flat bootstrap Responsive  Website Template | Blog :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<link href="design/vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="design/vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- vendor1 CSS-->
<link href="desgin/vendor1/select2/select2.min.css" rel="stylesheet" media="all">
<link href="desgin/vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="desgin/css/main1.css" rel="stylesheet" media="all">

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
			<div class="head-right">
			  <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
					<li><a href="/project/Admin/index.php">Home</a></li>
					<li><a href="adminlogout.php">Logout</a></li>
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

			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
			   </div>
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
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
		<div class="wrapper wrapper--w680">
				<div class="card card-4">
						<div class="card-body">
								<h2 class="title">ADD Auctioneer</h2>
								<form action="addauctioneercheck.php" method="POST">
										<div class="row row-space">
												<div class="col-2">
														<div class="input-group">
																<label class="label">Name</label>
																<input class="input--style-4" type="text" name="auctioneer_name" required>
														</div>
												</div>
												<div class="col-2">
														<div class="input-group">
																<label class="label">Password</label>
																<input class="input--style-4" type="text" name="password" required>
														</div>
												</div>
										</div>
										
										<div class="col-2">
														<div class="input-group">
																<label class="label">Type of authorisation</label>
																<div class="p-t-10">
																		<label class="radio-container m-r-45">Level-1
																				<input type="radio" checked="checked" name="genre" value="lev1">
																				<span class="checkmark"></span>
																		</label>
																		<label class="radio-container">Level-2
																				<input type="radio" name="genre" value="lev2">
																				<span class="checkmark"></span>
																		</label>
																		<label class="radio-container">Level-3
																				<input type="radio" name="genre" value="lev3">
																				<span class="checkmark"></span>
																		</label>
																</div>
														</div>
												</div>
</div>
										<div class="p-t-15">
												<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</div>

<!-- Jquery JS-->
<script src="desgin/vendor1/jquery/jquery.min.js"></script>
<!-- vendor1 JS-->
<script src="desgin/vendor1/select2/select2.min.js"></script>
<script src="desgin/vendor1/datepicker/moment.min.js"></script>
<script src="desgin/vendor1/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>
</html>
