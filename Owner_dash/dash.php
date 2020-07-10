<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
	
	header("Location: ../owner_login.php"); 
		
}
?>
<?php 
    $owner=$_SESSION['sess_user'];
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
	  $result1= $conn-> query("select Team_Id,team_name from team where Owner_Id_Fk='$ownerid' ");
	  while($row1 = $result1-> fetch_assoc())
	  {
	  $teamid=$row1["Team_Id"];
	  $teamname=$row1["team_name"];
	  }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $owner;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

    <link href="/project/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/project/js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <link href="/project/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/project/css/flexslider.css" type="text/css" media="screen" />

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


		<!-- One -->
<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
<!------------------------------------------------------------------------------>
            <div>
              <div class="box">
                <div class="image fit">
                  <img src="images/auction.jpg" width="75%" height="75%" alt="" />
                </div>
                <div class="content">
                  <header class="align-center">
                    <h2>Auction a Player</h2>
                  </header>
                      <h4 class="align-center">To Know the restriction of players you can buy here<a href="/project/players_Restriction/restriction.php?id=<?php echo $ownerid;?>" class="button alt" textalign="center">Player Limits</a></h4>
    									<footer class="align-center">
    										<a href="/project/auction/auction.php?id=<?php echo $ownerid;?>" class="button alt">Auction a Player</a>
    									</footer>
                </div>
              </div>
            </div>
<!----------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------>
            <div>
              <div class="box">
                <div class="image fit">
                  <img src="images/cricket.jpg" width="75%" height="75%" alt="" />
                </div>
                <div class="content">
                  <header class="align-center">
                    <h2><?php echo $teamname;?></h2>
                  </header>
                      <h4 class="align-center"> Players joined the team.</h4>
                  <footer class="align-center">
                    <a href="/project/players/auction_players/team_players.php?id=<?php echo $teamid;?>"class="button alt">Team Details</a>
                  </footer>
                </div>
              </div>
            </div>
<!----------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------>
            <div>
              <div class="box">
                <div class="image fit">
                  <img src="images/businesman.gif" alt="" />
                </div>
                <div class="content">
                  <header class="align-center">
                    <h2><?php echo $owner; ?></h2>
                  </header>
                <h4 class="align-center">co owners : 
				<?php
				$result2= $conn-> query("select CoownersMentors from owners,Co_owners where Owner_Id_Fk=$ownerid and Owner_Id=Owner_Id_Fk" );
	           while($row2 = $result2-> fetch_assoc())
	           {
				   echo $row2["CoownersMentors"];
			   }
				?>
				</h4>
                <footer class="align-center">
                  <a href="\project\player_profile\owner1.php?id=<?php echo $ownerid;?>" class="button alt">Owner info</a>
                </footer>
                </div>
              </div>
            </div>
<!----------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------>
          
<!----------------------------------------------------------------------------------------->
          </div>
				</div>
</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
