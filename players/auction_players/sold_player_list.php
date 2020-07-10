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
							    Player Name
							</div>
							<div class="cell">
							    Team
							</div>
							<div class="cell">
								price
							</div>
							<div class="cell">
							   Status
							</div>
						</div>
<!--
						<div class="row">
							<div class="cell" data-title="Full Name">
								Vincent Williamson
							</div>
							<div class="cell" data-title="Age">
								31
							</div>
							<div class="cell" data-title="Job Title">
								iOS Developer
							</div>
							<div class="cell" data-title="Location">
								Washington
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Joseph Smith
							</div>
							<div class="cell" data-title="Age">
								27
							</div>
							<div class="cell" data-title="Job Title">
								Project Manager
							</div>
							<div class="cell" data-title="Location">
								Somerville, MA
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Justin Black
							</div>
							<div class="cell" data-title="Age">
								26
							</div>
							<div class="cell" data-title="Job Title">
								Front-End Developer
							</div>
							<div class="cell" data-title="Location">
								Los Angeles
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Sean Guzman
							</div>
							<div class="cell" data-title="Age">
								25
							</div>
							<div class="cell" data-title="Job Title">
								Web Designer
							</div>
							<div class="cell" data-title="Location">
								San Francisco
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Keith Carter
							</div>
							<div class="cell" data-title="Age">
								20
							</div>
							<div class="cell" data-title="Job Title">
								Graphic Designer
							</div>
							<div class="cell" data-title="Location">
								New York, NY
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Austin Medina
							</div>
							<div class="cell" data-title="Age">
								32
							</div>
							<div class="cell" data-title="Job Title">
								Photographer
							</div>
							<div class="cell" data-title="Location">
								New York
							</div>
						</div>
<div class="">
		               <div class="cell" data-title="Owner Id">"
								.$row["owner_Id"].
					   "</div>
					   <div class="cell" data-title="Owner name">
					   ".$row["Owner_Name"].
					   
					   "</div></div>"
					                                     
						<div class="row">
							<div class="cell" data-title="Full Name">
								Vincent Williamson
							</div>
							<div class="cell" data-title="Age">
								31
							</div>
							<div class="cell" data-title="Job Title">
								iOS Developer
							</div>
							<div class="cell" data-title="Location">
								Washington
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Joseph Smith
							</div>
							<div class="cell" data-title="Age">
								27
							</div>
							<div class="cell" data-title="Job Title">
								Project Manager
							</div>
							<div class="cell" data-title="Location">
								Somerville, MA
							</div>
						</div>
----------this is the php code
   						
						

-->
  <?php
      $conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
      $sql="SELECT Player_Id,Name,Sold_Flag,Auction_Flag from Players";
	  $result= $conn-> query($sql);
	  
	  while($row = $result-> fetch_assoc())
	  {
		  #code...
		  
	  if($result-> num_rows > 0)
		{   
	if($row["Auction_Flag"]=="2" and $row["Sold_Flag"]=="1")
			 {
				 $playerid=$row["Player_Id"];
				 $result1=$conn->query("select team_name,price from team,players where players.Team_Id_Fk=team.Team_Id and Player_Id='$playerid'");
				 while($row1 = $result1-> fetch_assoc())
				 {
					  
					 $teamname=$row1["team_name"];
					 $price=$row1["price"];
				 }
				 ?>
		       
           <div class="row">
		       <div class="cell" data-title="Player Name">
			       <a href="/project/player_profile/player.php?id=<?php echo $row["Player_Id"];?>"><?php echo $row["Name"];?></a>
			   </div>
			   <div class="cell" data-title="">
			       <a href="#">
				   <font color="black"><?php echo  $teamname;?></font>
				   </a>
			   </div>
	           <div class="cell" data-title="">
			       <font color="black"><?php echo $price;?> lakhs</font>
			   </div>
			   <div class="cell" data-title="Auction Status">
			       <font color="green">sold</font>
			   </div>
			</div>
			<?php
	         }
	
	  
		}
	  else
	  {
		?><script>
		    alert('no one');
          </script>		
		  <?php
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