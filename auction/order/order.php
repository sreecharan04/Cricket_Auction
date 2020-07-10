
<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Player Order</title>
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
	<?php 
	if(isset($_GET['message']))
  {
	  $message= $_GET['message'];
	  ?>
	  <script>
	  var mes=<?php echo $message;?>;
	  alert('player auction has ended');
	  </script>
	  <?php
  }?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
							    Team
							</div>
							<div class="cell">
							    Price in lakhs
							</div>
							<div class="cell">
							    DateTime
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
	  
      $sql="SELECT * from auction_order where player_Id_Fk='$id'";
	  $result= $conn-> query($sql);
	  if($result-> num_rows > 0)
		{  
	while($row = $result-> fetch_assoc())
	  {
		  $o_id=$row["Owner_Id_Fk"];
		  $sql1="SELECT team_name from team where Owner_Id_Fk='$o_id'";
	       $result1= $conn-> query($sql1);
		   while($row1= $result1-> fetch_assoc())
		   {
			   $team=$row1["team_name"];
		   }
		  #code...
		 	?>
		       
           <div class="row">
		       <div class="cell" data-title="Player Name">
			       <a href="#"><font color="black"><?php echo $team;?></font> </a>
			   </div>
			   <div class="cell" data-title="Player Name">
			       <a href="#"><font color="black"><?php echo $row["Bid_amount"];?></font> </a>
			   </div>
			   <div class="cell" data-title="Player Name">
			       <a href="#"><?php echo $row["datetime"];?> </a>
			   </div>
			</div>
			<?php
	         }
		}
       else
	  {
		echo "no result";   
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