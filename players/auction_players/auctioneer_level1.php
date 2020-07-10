<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aucioneers Level 1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="main">	
	<div class="limiter">
	<div class="top-nav">
    					<span class="menu"> <img src="/project/images/icon.png" alt=""/></span>
    				<ul class="res">
    					<li><a href="/project/Admin/admin.php">Home</a></li>
    				<div class="clearfix"> </div>
    				</ul>
    			 </div>
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
							    Level 1 Auctioneer
							</div>
							<div class="cell">
							     Downgrade to 
							</div>
							<div>
							     Downgrade to 
							</div>
						</div>

   						
					
  <?php
      $conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
      $sql="SELECT * from users";
	  $result= $conn-> query($sql);
	  while($row = $result-> fetch_assoc())
	  {
		  #code...
		  
	  if($result-> num_rows > 0)
		{    
		if($row["role"]=='lev1') {?>
		       
           <div class="row">
		       <div class="cell" data-title="Player Name">
			       <a href="#"><?php echo $row["username"];?></a>
			   </div>
			   <div class="cell" data-title="Auction">
			       <a href="convto2.php?id=<?php echo $row["username"];?>">
				   <font color="red">Level 2</font>
				   </a>
			   </div>
			   <div class="cell" data-title="Auction">
			       <a href="convto3.php?id=<?php echo $row["username"];?>">
				   <font color="red">Level 3</font>
				   </a>
			   </div>
			   
	           
			</div>
		<?php }
	         
	
	  
		}
	  else
	  {
		echo "no result";   
	  }
	  }
	  	  $conn-> close();
 ?>
 					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>