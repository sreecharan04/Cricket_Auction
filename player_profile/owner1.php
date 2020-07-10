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
  $sql="SELECT * from owners where Owner_Id='$id'";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	   while($row = $result-> fetch_assoc())
	  {
		  $ownername=$row["Owner_Name"];  
	   $nationality=$row["nationality"];  
       $profession=$row["profession"];
       $phone=$row["phone"];  
	   $gender=$row["gender"];
	   $date=$row["dob"];
	   
	  }
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
			
				
				<h1>Owner Profile  </h1>
			<div class="profile">
	<div class="wrap">
		<div class="profile-main">
			<div class="profile-pic wthree">
							  <img src="images/owner.jpg" alt="" >
									
				
				<h3><?php echo $ownername;  ?></h3>
<div class="w3ls-agile-left">
<!---728x90---> 
				
				<ul class="address">
									
									<li>
										<ul class="address-text">
											<li><b>Nationality</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $nationality; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Profession</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $profession; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>phone no</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $phone; ?></span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>date of birth</b></li>
											<li>: </li>
											<li> <span class="w3"><?php echo $date; ?> </span></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Gender</b></li>
											<li>: </li>
											<li><span class="w3"><?php echo $gender;  ?></span></li>
										</ul>
									</li>
									
									
										
				</ul>
<div class="clear"></div>
			</div>
			
			</div>
			
			<div class="profile-ser">
	<h4 ></h4>
	<div class="awards-agileinfo  w3ls-section">
		<div class="awardsw3-agileits banner-agileinfo">
			<div class="container">
				<div class="w3ls_banner_bottom_grids">
					<div class=" w3ls_about_guage">
						<div class="demo">
						
						
							  <h4></h4>
						</div>
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
	  <?php $conn-> close(); ?>
</script>	
</body>
</html>
