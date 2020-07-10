
<?php
$id = $_GET['id'];
echo $id;
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
	  $sql="update players set Auction_Flag=1 where Player_Id='$id'";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	 header("Location: start_player_auction.php?message=1");
?>