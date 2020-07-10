<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
	
	header("Location: ../owner_login.php"); 
		
}
?>
<?php $owner=$_SESSION['sess_user'];
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
      $sql="SELECT Owner_Id from owners where Owner_Name='$owner'";
	  $result= $conn-> query($sql);
	  while($row = $result-> fetch_assoc())
	  {
	  $ownerid=$row["Owner_Id"];
	  }
	  $result1= $conn-> query("select Team_Id,team_name from team where Owner_Id_Fk=$ownerid");
	  while($row1 = $result1-> fetch_assoc())
	  {
	  $teamid=$row1["Team_Id"];
	  $teamname=$row1["team_name"];
	  }
	  $result2=$conn->query("select * from owners where Owner_Id='$ownerid'");
	  while($row2= $result2-> fetch_assoc())
	  {
		  $purseleft=$row2["Purse_Left_InLakh"];
		  $pursespent=$row2["Purse_Spent"];
	  }
	  $result3=$conn->query("select * from team where Team_Id='$teamid'");
	  while($row3= $result3-> fetch_assoc())
	  {
		  $remintake=$row3["Rem_Intake"];
		  $bowlers=$row3["no_of_bowlers"];
		  $batsmen=$row3["no_of_batmen"];
		  $allrounders=$row3["no_of_all"];
	  }
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Restriction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Classic Weather Widget Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<link href="/project/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<script src="/project/js/jquery-1.11.0.min.js"></script>
	<link href="/project/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="/project/css/flexslider.css" type="text/css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
	</script>

	<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/project/js/move-top.js"></script>
	<script type="text/javascript" src="/project/js/easing.js"></script>
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
	<!-- start-smoth-scrolling -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/project/js/move-top.js"></script>
	<script type="text/javascript" src="/project/js/easing.js"></script>
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

	<!--header start here-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="/project/index.php"> <img src="/project/images/logo.png" alt="" title=""> </a>
				</div>
				<div class="head-right">
				  <div class="top-nav">
						<span class="menu"> <img src="/project/images/icon.png" alt=""/></span>
					<ul class="res">
						<li><a href="/project/owner_dash/dash.php">Home</a></li>
    					<li><a href="/project/logout.php">Logout</a></li>
    					<li><a href="/project/about.php">About</a></li>
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
						<script src="/project/js/classie.js"></script>
						<script src="/project/js/uisearch.js"></script>
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

	<h1>Limits for buying Players</h1>
	<!-- Weather Widget starts here -->
	<div class="w3ls-weather">
		<div class="weather2">
			<h3><font color="white">Purse Left</font></h3>
			<h4><font color="white"><?php echo $purseleft; ?></font></h4>
	
		</div>
		<div class="weather2">
			<div class="layer">
				<h3><font color="white">Batsmen</font></h3>
				<h4><font color="white"><?php echo $batsmen; ?></font></h4>
	
			</div>
		</div>
		<div class="weather2">
			<h3><font color="white">Bowlers</font></h3>
			<h4><font color="white"><?php echo $bowlers; ?></font></h4>
	
		</div>

		<div class="clear"></div>

	</div>
	<div class="w3ls-weather">
		
		<div class="weather2">
			<div class="layer">
				<h3><font color="white">All Rounder</font></h3>
				<h4><font color="white"><?php echo $allrounders; ?></font></h4>
	
			</div>
		</div>
		<div class="weather2">
			<h3><font color="white">players you can buy</font></h3>
			<h4><font color="white"><?php echo $remintake; ?></font></h4>
	
		</div>
		<div class="weather2">
			<h3><font color="white">Purse spent</font></h3>
			<h4><font color="white"><?php echo $pursespent; ?></font></h4>
	
		</div>

		<div class="clear"></div>

	</div>

	<script src="js/jquery-2.1.4.min.js"></script>

	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons--><script>
				 var icons = new Skycons({"color": "#FFD700"}),
					  list  = [
						"clear-day"
					  ],
					  i;

				  for(i = list.length; i--; )
					icons.set(list[i], list[i]);

				  icons.play();
		</script>
		<script>
				 var icons = new Skycons({"color": "#f5f5f5"}),
					  list  = [
						"clear-night", "partly-cloudy-day",
						"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
						"fog"
					  ],
					  i;

				  for(i = list.length; i--; )
					icons.set(list[i], list[i]);

				  icons.play();
		</script>



</body>
</html>
