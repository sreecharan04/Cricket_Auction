<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
	
	header("Location: /project/owner_login.php"); 
		
}
?>

<?php
$conn=mysqli_connect("localhost","root","newrootpassword","cricket");
	  if($conn-> connect_error)
	  {
		  die("Connection failed".$conn-> connect_error);
	  }  
     $id = $_GET['id'];
     $o_id = $_GET['o_id'];
	 $sql2=mysqli_query($conn,"select * from auction_order where Player_Id_Fk='$id'");
	 $numrows=mysqli_num_rows($sql2);
	 if($numrows==0)
	 {
		 $sql1="select Base_Price_Inlakh as  Bid from players where Player_Id='$id'";
	 $result1= $conn-> query($sql1);
	  while($row1 = $result1-> fetch_assoc())
	  {
		  $price=$row1["Bid"];
	  }
	 }
     else
	 {		 
	 $sql1="select max(Bid_amount) as  Bid from auction_order where Player_Id_Fk='$id'";
	 $result1= $conn-> query($sql1);
	 
	  while($row1 = $result1-> fetch_assoc())
	  {
		  $price=$row1["Bid"];
	  }
	 }	  
	$sql="insert into auction_order (Bid_amount,player_Id_Fk,owner_Id_Fk,datetime) values('$price'+10,'$id','$o_id',current_timestamp)";
	  $result= $conn-> query($sql);
	 // echo "$Id";
	 header("Location: auction.php?id=$o_id"); 
?>