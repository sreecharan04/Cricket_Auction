<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $id = $_GET['id'];
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
  $sql="SELECT * from Players where Player_Id='$id'";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	   while($row = $result-> fetch_assoc())
	  {
		  #code...
		  
		 
?>	
<!DOCTYPE html>
<html>	
<head>

<title>Player Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 <meta name="keywords" content="Square Profile Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
 
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!--webfonts-->

<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<!--//webfonts-->

</head>
<body>

	<!-- main -->
	
		<div class="center-container">
		
			<div class="w3ls_banner_info">
			
				
				<h1>Player Profile  </h1>
			<div class="profile">
	<div class="wrap">
		<div class="profile-main">
			<div class="profile-pic wthree">
			<?php
			 if($row["Is_Batsmen"]=="1" AND $row["Is_Bowler"]=="1")
						{
							  echo '<img src="images/all.jpg" alt="" >';
						}
						else if($row["Is_Batsmen"]=="1")
						{
							 echo '<img src="images/Batsman.jpg" alt="" >';
						}
                        else if($row["Is_Bowler"]=="1")
						{
							  echo '<img src="images/Bowler.jpg" alt="" >';
						}		
             ?>						
				
				<h3><?php echo $row["Name"];  ?></h3>
<div class="w3ls-agile-left">
<!---728x90---> 
				
				<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>Country </b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $row["Country"]; ?></span></li>
										</ul>
									</li>
									
									<li>
										<ul class="address-text">
											<li><b>Base Price</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $row["Base_Price_Inlakh"]; ?>lakh</span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Runs</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $row["Runs"]; ?></span></li>
										</ul>
									</li>
									
									<li>
										<ul class="address-text">
											<li><b>Matches</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $row["matches"]; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Innings</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $row["Innings_Played"]; ?> </span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Highest Score</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $row["Highest_Score"];  ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>centuries</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $row["100s"]; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Half centuries</b></li>
											<li>: </li>
	                    <li><span class="w3"><?php echo $row["50s"]; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Bowling econ</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $row["Bowling_econ"];  ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Id</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $id; ?></span></li>
										</ul>
									</li>
									
									
										
				</ul>
<div class="clear"></div>
			</div>
			
			</div>
			
			<div class="profile-ser">
	<h4 >Skills</h4>
	<div class="awards-agileinfo  w3ls-section">
		<div class="awardsw3-agileits banner-agileinfo">
			<div class="container">
				<div class="w3ls_banner_bottom_grids">
					<div class=" w3ls_about_guage">
						<div class="demo">
						<?php if($row["Is_Batsmen"]=="1" AND $row["Is_Bowler"]=="1")
						{
							  echo '<div class="demo-1" data-percent="70"></div>';
						}
						else if($row["Is_Batsmen"]=="1")
						{
							  echo '<div class="demo-1" data-percent="80"></div>';
						}
                        else
						{
							echo '<div class="demo-1" data-percent="20"></div>';
						}							
						?>
						
							  <h4>Batting</h4>
						</div>
					</div>
					<div class=" w3ls_about_guage">
					<div class="demo">
						<?php if($row["Is_Batsmen"]=="1" AND $row["Is_Bowler"]=="1")
						{
							  echo '<div class="demo-1" data-percent="75"></div>';
						}
						else if($row["Is_Bowler"]=="1")
						{
							  echo '<div class="demo-1" data-percent="85"></div>';
						}
                        else
						{
							echo '<div class="demo-1" data-percent="20"></div>';
						}	
						?>
					
						  <h4>Bowling</h4>
					</div>
					</div>
					<div class=" w3ls_about_guage">
					<div class="demo">
					
						  <div class="demo-1" data-percent="85"></div>
						  <h4>Fielding</h4>
					</div>
					</div>
					<div class="clear"> </div>
				</div> 
			</div>
		</div>
		
	</div>
	<!-- //Awards-->


			
				
			
		</div>
	</div>
	<!-- //main -->

<script  src="js/jquery.min.v3.js"></script>
		<script src="js/jquery.circlechart.js"></script>
<script>
$('.demo-1').percentcircle();

$('.demo-2').percentcircle({
animate : false,
diameter : 100,
guage: 3,
coverBg: '#000',
bgColor: '#ff0000',
fillColor: '#000',
percentSize: '50px',
percentWeight: 'normal'
});
		
			
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	  <?php }$conn-> close(); ?>
</script>	
</body>
</html>
