<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
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
	
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
							    Team Name
							</div>
							<div class="cell">
							     Owner 
							</div>
							<div class="cell">
								view players
							</div>
						</div>
  <?php
      $conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
      $sql="SELECT * from team";
	  $result= $conn-> query($sql);
	  while($row = $result-> fetch_assoc())
	  {
		  #code...
		  
	  if($result-> num_rows > 0)
		{     
	      $owner=$row["Owner_Id_Fk"];
	     $result2=$conn->query("select Owner_name from owners,team where owners.Owner_Id='$owner'");
		 while($row2 = $result2-> fetch_assoc())
		 {
			$ownername=$row2["Owner_name"]; 
		 }
			 ?>
		       
           <div class="row">
		       <div class="cell" data-title="Player Name">
			       <a ><?php echo $row["team_name"];?></a>
			   </div>
			   <div class="cell" data-title="Auction">
			       <a href="/project/player_profile/owner1.php?id=<?php echo $owner;?>">
				   <font color="orange"><?php echo $ownername;?></font>
				   </a>
			   </div>
	           <div class="cell" data-title="Auction Status">
			       <a href="/project/players/auction_players/team_players.php?id=<?php echo $row["Team_Id"];?>"><font color="black">view players</font></a>
			   </div>
			</div>
			<?php
	         
	
	  
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